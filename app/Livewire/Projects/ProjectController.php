<?php

namespace App\Livewire\Projects;

use App\Models\Project;
use Livewire\Attributes\Title;
use Livewire\Component;

class ProjectController extends Component
{
    #[Title('Projects')]
    public function render()
    {
        return view('livewire.projects.index', [
            'projects' => Project::all()
        ]);
    }
}
