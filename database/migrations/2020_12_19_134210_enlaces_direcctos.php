<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EnlacesDirecctos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enlaces_directos', function (Blueprint $table) {
            $table->id();

            $table->string('enlace');
            $table->string('destino');
            $table->string('tiempo_espera');
            $table->string('imagen');
            $table->integer('estado'); // (0) Activo (1) Inactivo
            $table->string('nombre_imagen');
            $table->string('titulo');
            $table->string('subtitulo');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
