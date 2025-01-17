<?php

namespace Database\Factories;

use App\Enums\WeekStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Week>
 */
class WeekFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->word(),
            'status' =>WeekStatus::INACTIVE,
            'year' => fake()->numberBetween(2023, 2025) 
        ];
    }
}
