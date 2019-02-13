<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaInfoPagos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tbl_InfoPagos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('NumeroFactura');
            $table->integer('CantidadBoletas');
            $table->double('PrecioTotal');
            $table->double('TotalIva');
            $table->double('Ganancia');
            $table->dateTime('Fecha_Compra');
            $table->integer('EstadosTransaccion_id')->unsigned();
            $table->foreign('EstadosTransaccion_id')->references('id')->on('Tbl_EstadosTransaccion');
            $table->integer('MediosDePago_id')->unsigned();
            $table->foreign('MediosDePago_id')->references('id')->on('Tbl_MediosDePago');
            $table->integer('AsistenteXEvento_id')->unsigned();
            $table->foreign('AsistenteXEvento_id')->references('id')->on('tbl_asistentesXeventos');
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
        Schema::dropIfExists('Tbl_InfoPagos');
    }
}
