<?php

namespace App\Livewire\Control;

use Livewire\Attributes\Title;
use Livewire\Component;

class Forget extends Component
{
    #[Title("Reset Password")]
    public function render()
    {
        return view('livewire.auth.forget');
    }
}
