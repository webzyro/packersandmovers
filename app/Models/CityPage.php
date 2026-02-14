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

    /**
     * Set the city page's description with sanitization.
     *
     * @param string $value
     * @return void
     */
    public function setDescriptionAttribute($value)
    {
        $allowedTags = '<h1><h2><h3><h4><h5><h6><p><ul><li><ol><a><b><i><u><strong><em><br><span><div><img>';
        $this->attributes['description'] = strip_tags($value, $allowedTags);
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function services(): HasMany
    {
        return $this->hasMany(CityService::class, 'city_id');
    }

    public function faqs(): HasMany
    {
        return $this->hasMany(CityFaq::class, 'city_id');
    }
}
