<?php

namespace App\Livewire\Projects;

use Livewire\Attributes\On;
use Livewire\Component;

class FormModal extends Component
{
    public $showModal = false;

    public function mount()
    {
    }

    #[On('openCreateProjectModal')]
    public function saveProject()
    {
        // saving function
        dd('save project');
    }

    public function render()
    {
        return view('livewire.projects.form-modal');
    }
}
