<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdqProveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adq_proveedores', function (Blueprint $table) {
            $table->increments('codigoproveedor');
            $table->string('descripcionproveedor', 70)->unique();
            $table->string('direccion', 70);
            $table->string('telefono', 20)->default('SIN REGISTRO');
            $table->string('casilla', 20)->default('SIN REGISTRO');
            $table->string('mail', 30)->default('SIN REGISTRO');
            $table->string('ruc', 30);
            $table->string('ciudad', 30)->default('SIN REGISTRO');
            $table->string('ipmaquina', 30);
            $table->string('nombremaquina', 30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('adq_proveedores');
    }
}
