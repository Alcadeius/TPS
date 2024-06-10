<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class Landing extends Component
{
    #[Title("Landing Page")]
    public function render()
    {
        return view('livewire.landing');
    }
}
