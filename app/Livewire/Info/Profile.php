<?php

namespace App\Livewire\Info;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

class Profile extends Component
{
    use WithFileUploads;
    
    public $toggleEdit=false;
    public $editname=false;
    public $email="";
    public $name="";
    public $profile;

    public function edit(){
        $this->toggleEdit=true;
    }
    public function change(){
        $this->editname=true;
    }
    public function cancelname(){
        $this->editname=false;
    }
    public function cancel(){
        $this->toggleEdit=false;
    }
    public function submit(Request $request,$id){
        $find=User::find($id);
        $this->validate([
            'email'=> 'required|email|unique:users',
        ]);
        $find->update(['email' => $this->email]);
        $request->session()->put('email',$this->email);
        $find->save();
        $this->toggleEdit=false;
    }
    public function save(Request $request,$id){
        $find=User::find($id);
        $this->validate([
            'name'=> 'required|min:8|unique:users',
        ]);
        $find->update(['name' => $this->name]);
        $request->session()->put('name',$this->name);
        $find->save();
        $this->editname=false;
    }
    public function poto($id){
        $find=User::find($id);
        $this->validate([
            'profile'=> 'image|max:2048',
        ]);
        $img=uniqid().'.'.$this->profile->getClientOriginalExtension();
        $this->profile->storeAs('public/storage',name:$img);
        $this->profile= $img;
        User::where('id', auth()->id())->update(['profile' => $img]);
        // $result=$find->update(['profile'=>$img]);
        $find->save();
    }
    public function disaper($id){
        $data=User::find($id);
        Storage::delete('public/storage/'.$data->profile);
        User::where('id', auth()->id())->update(['profile' => null]);
    }
    #[Title("Profile")]
    public function render()
    {
        return view('livewire.info.profile');
    }
}
