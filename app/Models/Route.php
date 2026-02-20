<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'image',
        'description',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'schema_markup',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
