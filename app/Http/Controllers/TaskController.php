<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;

class TaskController extends Controller
{
    public function index(): void
    {
        //
    }

    public function create(): void
    {
        //
    }

    public function store(StoreTaskRequest $request): void
    {
        //
    }

    public function show(Task $task): void
    {
        //
    }

    public function edit(Task $task): void
    {
        //
    }

    public function update(UpdateTaskRequest $request, Task $task): void
    {
        //
    }

    public function destroy(Task $task): void
    {
        //
    }
}
