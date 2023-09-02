<?php

namespace App\Enum;

enum PriorityEnum: string
{
    const URGENT = "urgent";
    const HIGH = "high";
    const NORMAL = 'normal';
    const LOW = "low";

    public function label()
    {
        return match ($this) {
            self::URGENT => 'Urgent',
            self::HIGH => 'High',
            self::NORMAL => 'Normal',
            self::LOW => 'Low',
        };
    }

    public function flag()
    {
        return match ($this) {
            self::URGENT => '🟠',
            self::HIGH => '🟡',
            self::NORMAL => '🟢',
            self::LOW => '⚪️',
        };
    }
}
