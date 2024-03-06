<?php

namespace Database\Seeders;

use App\Models\Unions;
use Database\Factories\UnionsFactory;
use Database\Factories\UnionsFactory2;
use Database\Factories\UnionsFactory3;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $upazilasFactory = new UnionsFactory();
        $upazilasFactory2 = new UnionsFactory2();
        $upazilasFactory3 = new UnionsFactory3();
        $data = array_merge($upazilasFactory->definition(), $upazilasFactory2->definition(), $upazilasFactory3->definition());
        foreach ($data as $upazila)
        {
            Unions::create($upazila);
        }
    }
}
