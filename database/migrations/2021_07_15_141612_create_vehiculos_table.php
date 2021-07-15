<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblVehiculo', function (Blueprint $table) {
            $table->id();
            $table->string('placa', 8);
            $table->string('color');
            $table->char('transmision', 1);
            $table->string('modelo');
            $table->string('marca');
            $table->float('latitud');
            $table->float('longitud');
            $table->string('estado');

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
        Schema::drop('tblVehiculo');
    }
}
