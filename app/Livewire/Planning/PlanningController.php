<?php

namespace App\Livewire\Planning;

use Livewire\Attributes\Title;
use Livewire\Component;

class PlanningController extends Component
{
    #[Title('Planning')]
    public function render()
    {
        return view('livewire.planning.index');
    }
}
