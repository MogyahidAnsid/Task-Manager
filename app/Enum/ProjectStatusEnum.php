<?php

namespace App\Enum;

enum ProjectStatusEnum: string
{
    case NEW_PROJECT = 'new_project';
    case COMPLETED = 'completed';

    public function label()
    {
        return match ($this) {
            self::NEW_PROJECT => 'New Project',
            self::COMPLETED => 'Completed',
        };
    }
}
