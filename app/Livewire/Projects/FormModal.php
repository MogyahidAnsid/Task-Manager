<?php

namespace App\Livewire\Projects;

use App\Livewire\Projects\Index;
use Illuminate\Support\Collection;
use Livewire\Component;
use Symfony\Component\Routing\Annotation\Route;

class FormModal extends Component
{
    public function mount()
    {
    }

    public function save()
    {
        sleep(5);
        $this->dispatch('project-created');
    }

    public function render()
    {
        return view('livewire.projects.form-modal');
    }
}
