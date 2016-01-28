<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRubrosproveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adq_rubrosproveedores', function (Blueprint $table) {
            $table->increments('codigorubro');
            $table->string('descripcionrubro', 200);
            $table->decimal('partida', 18, 0);
            $table->boolean('sel')->default(false);
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
        Schema::drop('adq_rubrosproveedores');
    }
}
