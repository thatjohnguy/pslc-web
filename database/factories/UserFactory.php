<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'cadet_number' => $this->faker->numberBetween(0,1000),
            'service_number' => $this->faker->unique()->numberBetween(41111,49999),
            'sbc' => $this->faker->numberBetween(48,52),
            'verified' => $this->faker->numberBetween(0,1),
            'is_admin' => $this->faker->numberBetween(0,1),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->unique()->phoneNumber(),
            'path' => '150.png',
            'address' => $this->faker->address(),
            'email_verified_at' => now(),
            'password' => '$2y$10$xsNijQLGkj.zfLTF6NugoefRrqxt9KaBG9FERpE2OzFlkA1Kjn/ae', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
