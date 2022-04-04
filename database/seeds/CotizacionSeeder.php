<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CotizacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cotizacions')->insert
        ([
            'cliente_id' => 1,
            'clasificador_id' => 1,
            'observaciones' => 'Pago adelantado',
            'preciototal' => 200,
            'tiempoentrega' => '3 días',
            'validezoferta' => '2 semanas',
            'estado' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);    
    }
}
