<?php

namespace Database\Seeders;

use App\Models\Divisions;
use Database\Factories\DivisionsFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DivisionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $divisionsFactory = new DivisionsFactory();
        $data = $divisionsFactory->definition();
        foreach ($data as $division)
        {
            Divisions::create($division);
        }
    }
}
