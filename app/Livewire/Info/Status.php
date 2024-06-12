<?php

namespace App\Livewire\Info;

use App\Models\posts;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

use function Laravel\Prompts\alert;

class Status extends Component
{
    public $posts;
    public $user_id;
    public $dev;
    public function mount(){
        $this->posts=posts::where('user_id',Auth::user()->id)->get(); 
    }   
    #[On("minta")]
    public function minta($id){
        alert("masuk");
        $hasil=$id;
        $this->dev=User::where('name',$hasil->name)->get();
    }
    #[Title("Status")]
    public function render()
    {
        return view('livewire.info.status');
    }
}
