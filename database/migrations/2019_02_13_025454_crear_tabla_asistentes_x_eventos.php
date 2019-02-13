<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaAsistentesXEventos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_asistentesXeventos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ComentarioEvento');
            $table->boolean('terminos');
            $table->boolean('HabeasData');
            $table->boolean('esActivo');
            $table->boolean('esPerfilado');
            $table->boolean('esPago');
            $table->string('PinBoleta');
            $table->integer('idAsistenteCompra')->nullable();
            $table->integer('Asistente_id')->unsigned();
            $table->foreign('Asistente_id')->references('id')->on('tbl_asistentes');
            $table->integer('Evento_id')->unsigned();
            $table->foreign('Evento_id')->references('id')->on('Tbl_Eventos');
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
        Schema::dropIfExists('tbl_asistentesXeventos');
    }
}
