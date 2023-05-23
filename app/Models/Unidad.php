<?php

namespace App\Models;

use App\Models\Enfermero;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Unidad extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    public function enfermeros(){
        return $this->belongsToMany(Enfermero::class, 'enfermero_unidad');
    }

    public function medicos()
    {
        return $this->hasMany(Medico::class);
    }
}
