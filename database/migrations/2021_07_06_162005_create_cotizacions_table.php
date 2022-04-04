<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCotizacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cotizacions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cliente_id');       
            $table->unsignedBigInteger('clasificador_id');   
            $table->string('observaciones', 500);
            $table->float('preciototal', 8, 2);
            $table->string('tiempoentrega', 50);
            $table->string('validezoferta', 50);
            $table->tinyInteger('estado')->default('1');



            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('clasificador_id')->references('id')->on('clasificadors');

            $table->timestamps();


        });



    }


    public function down()
    {
        Schema::dropIfExists('cotizacions');
    }
}
