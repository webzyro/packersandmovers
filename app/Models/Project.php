<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'project_name',
        'slug',
        'category',
        'budget',
        'published_date',
        'duration_days',
        'image',
        'description',
        'is_active',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'schema_markup',
    ];

    protected $casts = [
        'budget' => 'decimal:2',
        'published_date' => 'date',
        'is_active' => 'boolean',
        'schema_markup' => 'array',
    ];
}
