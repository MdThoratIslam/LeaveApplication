<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                [
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
                ]
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
