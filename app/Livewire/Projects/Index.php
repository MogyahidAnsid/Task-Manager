<?php

namespace App\Livewire\Projects;

use Livewire\Attributes\Title;
use Livewire\Component;

class Index extends Component
{
    #[Title('Projects')]
    public function render()
    {
        return view('livewire.projects.index');
    }
}
