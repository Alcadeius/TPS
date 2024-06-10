<?php

namespace App\Livewire\Developer;

use Livewire\Attributes\Title;
use Livewire\Component;

class Dashboard extends Component
{
    #[Title("Dashboard")]
    public function render()
    {
        return view('livewire.developer.dashboard');
    }
}
