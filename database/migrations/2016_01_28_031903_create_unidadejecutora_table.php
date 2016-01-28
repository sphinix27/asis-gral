<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnidadejecutoraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('act_unidadejecutora', function (Blueprint $table) {
            $table->integer('codigounidadejecutora');
            $table->string('descripcion', 255)->nullable();
            $table->char('estado', 1)->nullable();
            $table->binary('login_sid')->nullable();
            $table->primary('codigounidadejecutora');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('act_unidadejecutora');
    }
}
