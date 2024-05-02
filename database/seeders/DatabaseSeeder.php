<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
        ]);

        Project::factory()
            ->count(30)
            ->hasTasks(30)
            ->create();
    }
}
