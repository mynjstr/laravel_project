<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Create permissions
        Permission::create(['name' => 'view todos']);
        Permission::create(['name' => 'create todos']);
        Permission::create(['name' => 'edit todos']);
        Permission::create(['name' => 'delete todos']);

        // Create roles and assign permissions
        $admin = Role::create(['name' => 'admin']);
        $admin->givePermissionTo(Permission::all());

        $editor = Role::create(['name' => 'editor']);
        $editor->givePermissionTo(['view todos', 'create todos', 'edit todos']);

        $viewer = Role::create(['name' => 'viewer']);
        $viewer->givePermissionTo('view todos');
    }
}