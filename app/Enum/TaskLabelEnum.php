<?php

namespace App\Enum;

enum TaskLabelEnum: string
{
    const SUPER = "super";
    const ADMIN = "admin";
    const MANAGER = 'manager';
    const USER = "user";
    const VIEWER = "viewer";
    const CONTRIBUTOR = "contributor";
    const APPROVER = "approver";
    const GUEST = "guest";
    const REPORTER = "reporter";

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

    public function description()
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

    public function color()
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
