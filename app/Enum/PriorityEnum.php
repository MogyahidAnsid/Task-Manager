<?php

namespace App\Enum;

enum PriorityEnum: string
{
    case URGENT = "urgent";
    case HIGH = "high";
    case NORMAL = 'normal';
    case LOW = "low";

    public function label()
    {
        return match ($this) {
            self::URGENT => '⚡Urgent',
            self::HIGH => '🔥High Priority',
            self::NORMAL => '🚀Normal',
            self::LOW => '👍Low',
        };
    }

    public function color()
    {
        return match ($this) {
            self::URGENT => 'bg-red-50 border-red-300',
            self::HIGH => 'bg-orange-50 border-orange-100',
            self::NORMAL => 'bg-green-50 border-green-100',
            self::LOW => 'bg-gray-50 border-gray-100',
        };
    }
}
