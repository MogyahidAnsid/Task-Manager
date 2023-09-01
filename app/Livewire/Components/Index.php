<?php

namespace App\Livewire\Components;

use Livewire\Attributes\Title;
use Livewire\Component;

class Index extends Component
{
    #[Title('Components')]
    public function render()
    {
        return view('livewire.components.index');
    }
}
