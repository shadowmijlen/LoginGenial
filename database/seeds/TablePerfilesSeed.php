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
            'Perfil1',
            'Perfil2'
        ];

        foreach ($perfiles as $valor){
            DB::table('perfiles')->insert([
                'perfil' => $valor
            ]);
        }
    }
}
