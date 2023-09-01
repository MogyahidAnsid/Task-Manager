<?php

namespace App\Enum;

enum UserRoleEnum: string
{
    case SUPER = 'super';
    case ADMIN = 'admin';
    case MANAGER = 'manager';
    case USER = "user";
    case VIEWER = "viewer";
    case CONTRIBUTOR = "contributor";
    case APPROVER = "approver";
    case GUEST = "guest";
    case REPORTER = "reporter";

    public function label()
    {
        return match ($this) {
            self::SUPER => 'Super Administrator',
            self::ADMIN => 'Administrator',
            self::MANAGER => 'Manager',
            self::USER => 'Regular User',
            self::VIEWER => 'Viewer',
            self::CONTRIBUTOR => 'Contributor',
            self::APPROVER => 'Approver',
            self::GUEST => 'Guest',
            self::REPORTER => 'Reporter',
        };
    }
}
