<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrativo extends Model
{
    use HasFactory;

    protected $table = 'administrativos';

    protected $fillable = ['nombre', 'apellidos', 'dni', 'sexo', 'fecha_nacimiento', 'correo'];
    
    protected $hidden = ['id', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
