<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $table = "perfiles";

    public function usuario()
    {
        return $this->hasMany(Cliente::class);
    }
}
