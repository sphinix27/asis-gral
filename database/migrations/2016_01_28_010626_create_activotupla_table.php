<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivotuplaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activotupla', function (Blueprint $table) {
            $table->increments('codigoactivotupla');
            $table->integer('codigoactivo')->nullable();
            $table->string('codigpmp', 20)->nullable();
            $table->integer('estado')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('activotupla');
    }
}
