<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActfirmatransferenciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actfirmatransferencia', function (Blueprint $table) {
            $table->increments('idfirma');
            $table->integer('firma1')->nullable();
            $table->integer('firma2')->nullable();
            $table->integer('firma3')->nullable();
            $table->integer('estado')->nullable();
            $table->integer('codigotransaccion')->nullable();            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('actfirmatransferencia');
    }
}
