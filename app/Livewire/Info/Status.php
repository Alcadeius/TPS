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
    public $snapToken;
    public $posts;
    public $user_id;
    public $dev_id;
    public $status;
    public $toggle=false;
    public function mount(){
        $this->posts=posts::where('user_id',Auth::user()->id)->get(); 
    }   
    public function approve(){
        $this->toggle=true;
    }
    #[Title("Status")]
    public function render()
    {
        return view('livewire.info.status');
    }
}
