<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CityPage extends Model
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

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function services(): HasMany
    {
        return $this->hasMany(CityService::class);
    }

    public function faqs(): HasMany
    {
        return $this->hasMany(CityFaq::class);
    }
}
