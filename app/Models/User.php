<?php

namespace App\Models;

use App\Models\Medico;
use App\Models\Enfermero;
use App\Models\Administrativo;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function administrativo()
    {
        return $this->hasOne(Administrativo::class);
    }

    public function medico()
    {
        return $this->hasOne(Medico::class);
    }

    public function enfermero()
    {
        return $this->hasOne(Enfermero::class);
    }

    /* Las funciones que se llaman getXXXXAttribute se llaman accesors y
     permiten su acceso mediante llamada como parámetro mágico:
    $user->tipo_usuario_id
    (https://laravel.com/docs/8.x/eloquent-mutators)
    */
    public function getTipoUsuarioIdAttribute(){
        if ($this->administrativo()->exists()){
            return 1;
        }
        elseif($this->medico()->exists()){
            return 2;
        }
        elseif($this->enfermero()->exists()){
            return 3;
        }
        else{
            return 4;
        }
    }

    public function getTipoUsuarioAttribute(){
        $tipos_usuario = [1 => trans('Administrativo'), 2 => trans('Médico'), 3 => trans('Enfermero'), 4 => trans('Admin')];
        return $tipos_usuario[$this->tipo_usuario_id];
    }
}
