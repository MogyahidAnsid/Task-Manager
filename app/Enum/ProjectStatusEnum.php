<?php

namespace App\Enum;

enum ProjectStatusEnum: int
{
    const NEW_PROJECT = 0;
    const COMPLETED = 1;

    public function label()
    {
        return match ($this) {
            self::NEW_PROJECT => 'New Project',
            self::COMPLETED => 'Completed',
        };
    }
}
