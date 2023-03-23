<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $table = 'pacientes';

    protected $fillable = ['nombre', 'apellidos', 'dni', 'sexo', 'fecha_nacimiento',
    'seguro', 'correo'];
    
    protected $hidden = ['id'];

    // protected $casts = [
    //     'fecha_nacimiento' => 'date'
    // ];

    # Aquí irían las relaciones con otros modelos!
    # Ejemplo: médico relacionado con un administrador a traves del registro
    
    public function user(){
        return $this->belongsTo(User::class);
    }

    # Aquí alguna función
    # Ejemplo: obtener el médico que le está atendendiendo
}
