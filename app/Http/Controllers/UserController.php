<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;

class UserController extends Controller
{
    public function index(): void
    {
        //
    }

    public function create(): void
    {
        //
    }

    public function store(StoreUserRequest $request): void
    {
        //
    }

    public function show(User $user): void
    {
        //
    }

    public function edit(User $user): void
    {
        //
    }

    public function update(UpdateUserRequest $request, User $user): void
    {
        //
    }

    public function destroy(User $user): void
    {
        //
    }
}
