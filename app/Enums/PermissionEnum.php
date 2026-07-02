<?php

namespace App\Enums;

enum PermissionEnum: string
{
    case VIEW_TODOS = 'view todos';
    case CREATE_TODOS = 'create todos';
    case EDIT_TODOS = 'edit todos';
    case DELETE_TODOS = 'delete todos';

    public function label(): string
    {
        return match ($this) {
            static::VIEW_TODOS => 'View Todos',
            static::CREATE_TODOS => 'Create Todos',
            static::EDIT_TODOS => 'Edit Todos',
            static::DELETE_TODOS => 'Delete Todos',
        };
    }
}