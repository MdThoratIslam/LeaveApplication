<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name'              => 'Md Thorat Islam',
            'phone'             => '01517123534',
            'cur_area'          => '34/4,ahammedbagh,Bashaboo',
            'cur_division_id'   => 1,
            'cur_district_id'   => 1,
            'cur_thana_id'      => 1,
            'gross_salary'      => 50000,
            'designation_id'    => 1,
            'department_id'     => 1,
            'photo_path'        => 'assets/images/users/avatar-1.png',
            'signature_path'    => 'assets/images/users/sign/sign.png',
            'email'             => 'thorat.pwad03@gmail.com',
            'password'          => bcrypt('password'),
            'user_type'         => 1,
            'status_active'     => 1,
            'is_delete'         => 0,
        ];
        $superAdmin = User::create($data);
        $superAdmin->assignRole('Super Admin');

        // Creating Admin User
        $admin = User::create([
            'name'      => 'Kupa Samsu',
            'email'     => 'samsu@gmail.com',
            'password'  => Hash::make('password')
        ]);
        $admin->assignRole('Admin');

        // Creating Product Manager User
        $productManager = User::create([
            'name'      => 'Masud',
            'email'     => 'masud@gmail.com',
            'password'  => Hash::make('password')
        ]);
        $productManager->assignRole('Manager');
    }
}
