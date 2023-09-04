<?php

namespace App\Livewire\Components;

use Livewire\Attributes\Title;
use Livewire\Component;

class ComponentController extends Component
{
    public function sendAnnouncementMail()
    {
    }

    #[Title('Components')]
    public function render()
    {
        return view('livewire.components.index');
    }
}
