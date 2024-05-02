<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Enums\TaskPriority;
use App\Enums\TaskStatus;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
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
            'status' => fake()->randomElement(TaskStatus::cases()),
            'priority' => fake()->randomElement(TaskPriority::cases()),
            'image_path' => fake()->imageUrl(),
            'assigned_user_id' => User::all()->random()->id,
            'created_by' => User::all()->random()->id,
            'updated_by' => User::all()->random()->id,
        ];
    }
}
