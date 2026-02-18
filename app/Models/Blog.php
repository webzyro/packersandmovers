<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'image',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'schema_markup',
        'is_active',
    ];

    protected $casts = [
        'schema_markup' => 'array',
        'is_active' => 'boolean',
    ];
}
