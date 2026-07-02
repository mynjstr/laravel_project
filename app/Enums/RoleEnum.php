<?php

namespace App\Enums;

enum RoleEnum: string
{
    case ADMIN = 'admin';
    case EDITOR = 'editor';
    case VIEWER = 'viewer';

    public function label(): string
    {
        return match ($this) {
            static::ADMIN => 'Administrator',
            static::EDITOR => 'Editor',
            static::VIEWER => 'Viewer',
        };
    }
}