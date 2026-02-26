<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'project_name',
        'category',
        'budget',
        'published_date',
        'duration_days',
        'image',
        'description',
        'is_active',
    ];

    protected $casts = [
        'budget' => 'decimal',
        'is_active' => 'boolean',
    ];
}
