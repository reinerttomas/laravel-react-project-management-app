<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index(): void
    {
        //
    }

    public function create(): void
    {
        //
    }

    public function store(StoreProjectRequest $request): void
    {
        //
    }

    public function show(Project $project): void
    {
        //
    }

    public function edit(Project $project): void
    {
        //
    }

    public function update(UpdateProjectRequest $request, Project $project): void
    {
        //
    }

    public function destroy(Project $project): void
    {
        //
    }
}
