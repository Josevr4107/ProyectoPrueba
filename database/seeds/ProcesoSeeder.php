<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProcesoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('procesos')->insert
        ([
            'tipotrabajo_id' => 1,
            'nro' => 1,
            'descripcion' => 'Quemado de Placas CTP',
            'tiempomin' =>60,
            'estado' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);    }
}
