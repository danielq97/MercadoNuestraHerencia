<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->increments('id');

            $table->string('direccion', 25);
            $table->string('telefono', 15);
            $table->date('fecha');
            $table->integer('precio_total');
            $table->char('domicilio', 1);

            $table->string('usuario_cedula');
            $table->foreign('usuario_cedula')->references('cedula')->on('usuarios');


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
        Schema::dropIfExists('reservas');
    }
}
