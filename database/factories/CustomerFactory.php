<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'name' => $this->faker->name(),
            'phone' => $this->faker->phoneNumber(),
            'blood_group' => $this->faker->randomElement(['A+', 'B+', 'O+', 'A-', 'B-', 'O-']),
            'age' => $this->faker->numberBetween(20, 24),
        ];
    }
}
