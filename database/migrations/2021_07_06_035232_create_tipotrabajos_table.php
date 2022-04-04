<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipotrabajosTable extends Migration
{

    public function up()
    {
        Schema::create('tipotrabajos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo', 200);
            $table->string('nombre', 200);
            $table->string('descripcion', 500)->nullable();
            $table->tinyInteger('estado')->default('1');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('tipotrabajos');
    }
}
