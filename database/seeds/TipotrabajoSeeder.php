<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipotrabajoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipotrabajos')->insert
        ([
            'codigo' => 'Papeleria',
            'nombre' => 'Tarjetas Personales',
            'descripcion' => 'Tamaño 9x5cm en Papel Couche de 300gr, Plastificadas en Brillo o Mate',
            'estado' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
