<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_reservas', function (Blueprint $table) {
            $table->increments('id');
            //Pensar para que lo guarde
            $table->integer('idProducto');

            $table->string('nombre', 25);
            $table->string('descripcion', 200);
            $table->integer('precio');
            $table->integer('cantidad');
            $table->string('foto');

            $table->string('categoria');            
            $table->string('unidadmedida');      
            
            $table->unsignedInteger('reserva_id');
            $table->foreign('reserva_id')->references('id')->on('reservas');



            
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
        Schema::dropIfExists('producto_reservas');
    }
}
