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

    /**
     * Set the service's description with sanitization.
     *
     * @param string $value
     * @return void
     */
    public function setDescriptionAttribute($value)
    {
        $allowedTags = '<h1><h2><h3><h4><h5><h6><p><ul><li><ol><a><b><i><u><strong><em><br><span><div><img>';
        $this->attributes['description'] = strip_tags($value, $allowedTags);
    }

    public function faqs(): HasMany
    {
        return $this->hasMany(ServiceFaq::class);
    }
}
