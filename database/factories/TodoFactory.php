<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class TodoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->title,
            'description' => fake()->realTextBetween,
            'completed_at' => fake()->boolean ? fake()->date : null,
            'url' => fake()->url(),
            'user_id' => User::inRandomOrder()->first(), // You can customize how the roles are assigned (e.g., inRandomOrder(), first(), etc.)
        ];
    }

}
