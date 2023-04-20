<?php

namespace App\Models;

use App\Models\CitaUrgencia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Enfermero extends Model
{
    use HasFactory;

    protected $table = 'enfermeros';

    protected $fillable = ['nombre', 'apellidos', 'dni', 'sexo', 'fecha_nacimiento', 'correo', 'turno'];
    
    protected $hidden = ['id', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function cita_urgencias(){
        return $this->hasMany(CitaUrgencia::class);
    }
}
