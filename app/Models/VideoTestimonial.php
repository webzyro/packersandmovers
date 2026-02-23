<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VideoTestimonial extends Model
{
    protected $fillable = [
        'video_link',
        'name',
        'message',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
