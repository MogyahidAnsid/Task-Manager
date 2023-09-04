<?php

namespace App\Livewire\Team;

use Livewire\Attributes\Title;
use Livewire\Component;

class TeamController extends Component
{
    #[Title('Teams')]
    public function render()
    {
        return view('livewire.team.index');
    }
}
