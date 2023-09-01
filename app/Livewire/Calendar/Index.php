<?php

namespace App\Livewire\Calendar;

use Livewire\Attributes\Title;
use Livewire\Component;

class Index extends Component
{
    #[Title('Calendar')]
    public function render()
    {
        return view('livewire.calendar.index');
    }
}
