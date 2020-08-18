<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Session;

class Usuario extends Authenticatable
{
    protected $remember_token = false;
    protected $table = "usuarios";
    protected $fillable = ['usuario','correo', 'password','perfil_id'];
    protected $attributes = [
        'perfil_id' => 2
    ];

    public function perfil()
    {
        return $this->belongsTo(Perfil::class);
    }

    public function cliente()
    {
        return $this->hasOne(Cliente::class);
    }

    public function setSession($role)
    {
        if ($role->flestado == 1) {

            Session::put(
                [
                    'usuario_id' => $this->id,
                    'correo' => $this->correo,
                    'perfil_id' => $this->perfil->id,
                    'perfil' => $this->perfil->perfil
                ]
            );
        }
    }
}
