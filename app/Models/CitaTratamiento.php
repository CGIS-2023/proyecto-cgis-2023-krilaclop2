<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CitaTratamiento extends Model
{
    use HasFactory;
    protected $casts = [
        'inicio' => 'datetime:Y-m-d',
        'fin' => 'datetime:Y-m-d',
    ];
}
