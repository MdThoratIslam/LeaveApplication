<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//        $userFactory = new UserFactory();
//        User::factory()->create($userFactory->definition());


//        $userFactory = new UserFactory();
//        $userdata = $userFactory->definition();
//        foreach ($userdata as $data)
//        {
//            User::create($data);
//        }

        $this->call(DivisionsSeeder::class);
        $this->call(DistrictsSeeder::class);
        $this->call(UpazilasSeeder::class);
        //$this->call(UnionsSeeder::class);

        $this->call([
            PermissionSeeder::class,
            RoleSeeder::class,
            SuperAdminSeeder::class,
        ]);

    }
}
