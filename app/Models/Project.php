<?php

namespace App\Models;

use App\Enums\ProjectStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    use HasFactory;

    protected $casts = [
        'status' => ProjectStatus::class,
    ];

    public function tasks(): HasMany
    {
        return $this->hasMany(Task::class);
    }
}
