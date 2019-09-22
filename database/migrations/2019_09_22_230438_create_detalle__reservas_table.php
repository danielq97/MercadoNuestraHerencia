<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle__reservas', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedInteger('reserva_id');
            $table->foreign('reserva_id')->references('id')->on('reservas');
            $table->unsignedInteger('producto_id');
            $table->foreign('producto_id')->references('id')->on('productos');


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
        Schema::dropIfExists('detalle__reservas');
    }
}
