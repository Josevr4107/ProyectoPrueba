<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert
        ([
            'nombre' => 'Adisar',
            'cinit' => '987143',
            'direccion' => 'Av. Beni 2do Anillo, Edificio Top Center Piso 7 Of 7D',
            'cel1' => '7652154',
            'cel2' => '33548176',
            'correo' => 'marketing@adisar.com',
            'estado' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
