<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(ClienteSeeder::class);
        $this->call(ClasificadorSeeder::class);
        $this->call(TipotrabajoSeeder::class);
        $this->call(ProcesoSeeder::class);
        $this->call(CotizacionSeeder::class);

        factory(\App\Cliente::class, 30)->create();
    }
}
