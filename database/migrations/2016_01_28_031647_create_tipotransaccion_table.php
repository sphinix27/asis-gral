<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipotransaccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('act_tipotransaccion', function (Blueprint $table) {
            $table->integer('codigotipotransaccion');
            $table->string('tipotransaccion', 255)->nullable();
            $table->char('estado', 1)->nullable();
            $table->binary('login_sid')->nullable();
            $table->primary('codigotipotransaccion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('act_tipotransaccion');
    }
}
