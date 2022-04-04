<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClasificadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clasificadors')->insert
        ([
            'nombre' => 'Trabajos de Dentistas',
            'descripcion' => 'Útil para clasificar todos los trabajos y/o cotizaciones realizados a dentistas, desde diseño hasta impresión de papelería o gigantografías.',
            'estado' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);    }
}
