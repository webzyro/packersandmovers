<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CityFaq extends Model
{
    protected $fillable = [
        'city_id',
        'question',
        'answer',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(CityPage::class, 'city_id', 'id');
    }
}
