<?php

use Illuminate\Database\Seeder;

class TablePerfilesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $perfiles = [
            'Administrador',
            'Trabajador'
        ];

        foreach ($perfiles as $valor){
            DB::table('perfiles')->insert([
                'perfil' => $valor
            ]);
        }
    }
}
