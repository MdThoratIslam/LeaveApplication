<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Divisions>
 */
class DivisionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // my custome data set same as userFactory data set multiple row data set
        return
        [
            [
                'name' => 'Dhaka',
                'bn_name' => 'ঢাকা',
                'url' => 'dhaka',
                'code' => 50,
                'status_active' => 1,
                'is_delete' => 0,
            ],
            [
                'name' => 'Chittagong',
                'bn_name' => 'চট্টগ্রাম',
                'url' => 'chittagong',
                'code' => 60,
                'status_active' => 1,
                'is_delete' => 0,
            ],
            [
                'name' => 'Rajshahi',
                'bn_name' => 'রাজশাহী',
                'url' => 'rajshahi',
                'code' => 70,
                'status_active' => 1,
                'is_delete' => 0,
            ],
            [
                'name' => 'Khulna',
                'bn_name' => 'খুলনা',
                'url' => 'khulna',
                'code' => 80,
                'status_active' => 1,
                'is_delete' => 0,
            ],
            [
                'name' => 'Barishal',
                'bn_name' => 'বরিশাল',
                'url' => 'barishal',
                'code' => 90,
                'status_active' => 1,
                'is_delete' => 0,
            ],
            [
                'name' => 'Sylhet',
                'bn_name' => 'সিলেট',
                'url' => 'sylhet',
                'code' => 100,
                'status_active' => 1,
                'is_delete' => 0,
            ],
            [
                'name' => 'Rangpur',
                'bn_name' => 'রংপুর',
                'url' => 'rangpur',
                'code' => 110,
                'status_active' => 1,
                'is_delete' => 0,
            ],
            [
                'name' => 'Mymensingh',
                'bn_name' => 'ময়মনসিংহ',
                'url' => 'mymensingh',
                'code' => 120,
                'status_active' => 1,
                'is_delete' => 0,
            ]
        ];
    }
}
