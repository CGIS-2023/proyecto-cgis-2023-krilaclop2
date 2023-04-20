<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;
    
    protected $table = 'medicos';

    protected $fillable = ['nombre', 'apellidos', 'dni', 'sexo', 'fecha_nacimiento', 'correo', 'especialidad'];
    
    protected $hidden = ['id','user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function cita_urgencias(){
        return $this->hasMany(CitaUrgencia::class);
    }
}
