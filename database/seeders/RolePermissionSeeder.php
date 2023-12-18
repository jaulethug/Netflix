<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    public function run()
    {
        // Créer des rôles
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleUser = Role::create(['name' => 'user']);

        // Créer des permissions
        $permissionEdit = Permission::create(['name' => 'edit articles']);
        $permissionDelete = Permission::create(['name' => 'delete articles']);

        // Assigner les permissions au rôle admin
        $roleAdmin->givePermissionTo($permissionEdit);
        $roleAdmin->givePermissionTo($permissionDelete);
    }
}
