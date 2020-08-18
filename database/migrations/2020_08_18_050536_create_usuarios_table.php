<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('perfil_id')
                ->references('id')
                ->on('perfiles')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->string('usuario')->unique(); ######## ¿Correo o DNI?
            $table->string('password',100); ######## Contraseña para el login
            $table->string('correo')->unique(); ######## Correo de registro del perfil
            $table->boolean('flestado') ######## TRUE: Puede loguearse; FALSE: No puede loguearse
                ->default(TRUE);  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
