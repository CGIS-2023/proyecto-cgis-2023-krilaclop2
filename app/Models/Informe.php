<?php

namespace App\Models;

use App\Models\Medico;
use App\Models\Paciente;
use App\Models\CitaUrgencia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Informe extends Model
{
    use HasFactory;
        
    protected $table = 'informes';

    protected $fillable = ['diagnostico', 'riesgo', 'observaciones', 'paciente_id','medico_id','tratamiento_id'];
    
    protected $hidden = ['id','cita_urgencia_id',];

    public function cita_urgencias(){
        return $this->belongsTo(CitaUrgencia::class);
    }

    # Para poder obtener el nombre del paciente a través de la Cita.
    public function PacienteCita(): HasOneThrough
    {
        return $this->hasOneThrough(Paciente::class, CitaUrgencia::class);
    }

    public function medico()
    {
        return $this->belongsTo(Medico::class);
    }
    
}
