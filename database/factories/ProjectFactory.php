<?php

namespace Database\Factories;

use App\Enums\ProjectStatus;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(),
            'description' => fake()->realText(),
            'due_at' => fake()->dateTimeBetween('now', '+1 year'),
            'status' => fake()->randomElement(ProjectStatus::cases()),
            'image_path' => fake()->imageUrl(),
            'created_by' => User::all()->random()->id,
            'updated_by' => User::all()->random()->id,
        ];
    }
}
