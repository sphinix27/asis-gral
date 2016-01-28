<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResponsablerespaldoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('act_responsable_respaldo', function (Blueprint $table) {
            $table->integer('cirun');
            $table->integer('codigoambiente');
            $table->string('nombre1', 50)->nullable();
            $table->string('nombre2', 50)->nullable();
            $table->string('paterno', 50)->nullable();
            $table->string('materno', 50)->nullable();
            $table->boolean('estado')->nullable();
            $table->boolean('autoriza')->nullable();
            $table->string('cargo', 100)->nullable();
            $table->binary('login_sid')->nullable();
            $table->timestamp('fecha_modificacion', 3)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('act_responsable_respaldo');
    }
}
