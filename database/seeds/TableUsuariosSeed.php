<?php

use Illuminate\Database\Seeder;

class TableUsuariosSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuarios = [
            [
                'perfil_id' => 1,
                'usuario' => 'administrador',
                'password' => bcrypt('secret'),
                'correo' => 'administrador@dominio.com',
                'flestado' => TRUE,
            ],
            [
                'perfil_id' => 2,
                'usuario' => 'trabajador',
                'password' => bcrypt('secret'),
                'correo' => 'agente@dominio.com',
                'flestado' => TRUE,
            ]
        ];

        foreach ($usuarios as $valor){
            DB::table('usuarios')->insert([
                'perfil_id' => $valor['perfil_id'],
                'usuario' => $valor['usuario'],
                'password' => $valor['password'],
                'correo' => $valor['correo'],
                'flestado' => $valor['flestado'],
            ]);
        }
    }
}
