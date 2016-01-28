<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelacionedificioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('act_relacionedificio', function (Blueprint $table) {
            $table->increments('id_relacion');
            $table->integer('activo_edificio')->nullable();
            $table->integer('activo_subedificio')->nullable();
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
        Schema::drop('act_relacionedificio');
    }
}
