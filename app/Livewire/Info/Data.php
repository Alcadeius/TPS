<?php

namespace App\Livewire\Info;

use App\Models\posts;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

class Data extends Component
{
    public $posts;
    public $user_id;
    public function mount(){
        $cek=$this->posts=posts::where('user_id',Auth::user()->id)->get(); 
    }   
    public function delet($id){
        $data=posts::find($id);
        $data->delete();
    }
    #[Title("Post User")]
    public function render()
    {
        return view('livewire.info.data');
    }
}
