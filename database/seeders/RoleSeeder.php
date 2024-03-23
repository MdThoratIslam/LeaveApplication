<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'Super Admin']);
        $admin      = Role::create(['name' => 'Admin']);
        $manager    = Role::create(['name' => 'Manager']);
        $user       = Role::create(['name' => 'User']);

        $admin->givePermissionTo([
            'create-role',
            'edit-role',
            'delete-role',
            'view-role',
            'create-leave',
            'edit-leave',
            'delete-leave',
            'view-leave'
        ]);

        $manager->givePermissionTo([
            'view-role',
            'create-leave',
            'edit-leave',
            'delete-leave',
            'view-leave'
        ]);
        $user->givePermissionTo([
            'create-leave',
            'edit-leave',
            'delete-leave',
            'view-leave'
        ]);
    }
}
