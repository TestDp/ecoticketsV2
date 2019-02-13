<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaEvento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tbl_Eventos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nombre_Evento');
            $table->string("Lugar_Evento");
            $table->string('CorreoEnviarInvitacion');
            $table->string('informacionEvento')->nullable();;
            $table->string('CodigoPulep');
            $table->string('FlyerEvento')->nullable();;
            $table->boolean('SolicitarPIN');
            $table->boolean('EsPublico');
            $table->boolean('esPago');
            $table->dateTime('Fecha_Evento');
            $table->dateTime("Fecha_Inicial_Registro");
            $table->dateTime('Fecha_Final_Registro');
            $table->integer('numeroAsistentes');
            $table->integer('user_id')->unsigned();
            $table->foreign("user_id")->references('id')->on('users');
            $table->integer('Ciudad_id')->unsigned();
            $table->foreign("Ciudad_id")->references('id')->on('Tbl_Ciudades');
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
        Schema::dropIfExists('Tbl_Eventos');
    }
}
