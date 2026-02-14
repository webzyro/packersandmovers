<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model
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

    public function faqs(): HasMany
    {
        return $this->hasMany(ServiceFaq::class);
    }
}
