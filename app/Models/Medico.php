<?php

namespace App\Models;
use Carbon\Carbon;

use App\Models\User;
use App\Models\Informe;
use App\Models\CitaUrgencia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

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

    public function informes()
    {
        return $this->hasMany(Informe::class);
    }    

    // public function citasHoy()
    // {
    //     $fechaActual = Carbon::now()->toDateString();

    //     return $this->hasMany(CitaUrgencia::class)
    //         ->whereDate('fecha', $fechaActual);
    // }
    
    public function unidad()
    {
        return $this->belongsTo(Unidad::class);
    }
}
