<?php

namespace App\Livewire\Job;

use App\Models\posts;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Component;

class Browse extends Component
{
    public $posts;
    public $search;
    public function mount(){
        $this->posts=posts::with('user')->get();
    }
    public function request($uid){
        $cek=Auth::user()->id;
        $cari=User::find($cek);
        $name=$cari->name;
        $cek=$this->posts=posts::where('id',$uid)->update(['dev_name'=>$name]);
    }
    #[Title("Browse Jobs")]
    public function render()
    {
        return view('livewire.job.browse',[
            $this->posts = posts::where('title', 'like', '%' . $this->search . '%')->get(),
        ]);
    }
}
