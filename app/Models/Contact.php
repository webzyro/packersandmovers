<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'from',
        'to',
        'when',
        'distance',
        'move_type',
        'service_type',
    ];
}
