<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        $permissions = [
////            ['create-leave', 'edit-leave', 'delete-leave', 'view-leave'],
////            ['create-user', 'edit-user', 'delete-user', 'view-user'],
////            ['create-role', 'edit-role', 'delete-role', 'view-role']
//
//                'user' => ['create-user', 'edit-user', 'delete-user', 'view-user'],
//                'role' => ['create-role', 'edit-role', 'delete-role', 'view-role'],
//                'leave' => ['create-leave', 'edit-leave', 'delete-leave', 'view-leave']
//        ];
//
//        foreach ($permissions as $permissionGroup) {
//            foreach ($permissionGroup as $permission) {
////                Permission::create(['name' => $permission]);
//                Permission::create([
//                    'name' => $permission,
//                    'module_name' => $moduleName // Set module_name to the current module name
//                ]);
//            }
//        }


        $permissions = [
            'user' => ['create-user', 'edit-user', 'delete-user', 'view-user'],
            'role' => ['create-role', 'edit-role', 'delete-role', 'view-role'],
            'leave' => ['create-leave', 'edit-leave', 'delete-leave', 'view-leave']
        ];

        foreach ($permissions as $moduleName => $permissionGroup) {
            foreach ($permissionGroup as $permission) {
                Permission::create([
                    'name' => $permission,
                    'module_name' => $moduleName // Set module_name to the current module name
                ]);
            }
        }
    }
}
