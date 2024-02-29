<?php

namespace Database\Seeders;

use App\Models\Upazilas;
use Database\Factories\UpazilasFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UpazilasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $upazilasFactory = new UpazilasFactory();
        $data = $upazilasFactory->definition();
        foreach ($data as $upazila)
        {
            Upazilas::create($upazila);
        }
    }
}
