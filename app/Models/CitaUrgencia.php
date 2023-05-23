<?php

namespace App\Models;

use App\Models\Enfermero;
use App\Models\Tratamiento;
use App\Models\CitaTratamiento;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CitaUrgencia extends Model
{
    use HasFactory;

    protected $fillable = ['fecha_hora', 'medico_id', 'paciente_id', 'enfermero_id'];

    protected $casts = [
        'fecha_hora' => 'datetime:Y-m-d H:i',
    ];

    public function medico(){
        return $this->belongsTo(Medico::class);
    }

    public function paciente(){
        return $this->belongsTo(Paciente::class);
    }

    public function enfermero(){
        return $this->belongsTo(Enfermero::class);
    }

    # Habrá que hacerlo pero con Tratamiento e InformeMedico y son 1-1 y 1-0,1, los ejemplos son 1, N

    // public function tratamiento(){
    //     return $this->belongsToMany(Medicamento::class)->using(CitaMedicamentoPivot::class)->withPivot('tomas_dia', 'comentarios', 'inicio', 'fin');
    // }

    public function informes()
    {
        return $this->hasManyThrough(Informe::class, Medico::class);
    }    

    public function tratamiento(){
        return $this->belongsToMany(Tratamiento::class)->using(CitaTratamiento::class)->withPivot('comentarios', 'inicio', 'fin');
    }
}
