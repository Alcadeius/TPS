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
    public function mount(){
        $this->posts=posts::with('user')->get(); 
    }
    public function request(){
        $cek=Auth::user()->id;
        $cari=User::find($cek);
        $tes=$this->dispatch("minta", $cari->name);
        // dd($tes);
    }
    #[Title("Browse Jobs")]
    public function render()
    {
        return view('livewire.job.browse');
    }
}
