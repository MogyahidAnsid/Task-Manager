<?php

namespace App\Livewire\Team;

use Livewire\Attributes\Title;
use Livewire\Component;

class Index extends Component
{
    #[Title('Teams')]
    public function render()
    {
        return view('livewire.team.index');
    }
}
