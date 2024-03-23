<?php

namespace Database\Seeders;

use App\Models\Districts;
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
//        foreach ($data as $upazila)
//        {
//            Upazilas::create($upazila);
//        }
        $data = $upazilasFactory->definition();
        foreach ($data as $val) {
            $divisionInfo = Districts::where('id', $val['district_id'])->first('division_id');
            $val['division_id'] = $divisionInfo->division_id;
            Upazilas::create($val);
        }
    }
}
