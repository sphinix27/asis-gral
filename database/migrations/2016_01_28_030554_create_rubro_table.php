<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRubroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('act_rubro', function (Blueprint $table) {
            $table->integer('codigorubroact');
            $table->string('descripcionrubroact', 255)->nullable()->unique();
            $table->integer('vidautil')->nullable();
            $table->double('coheficiente')->nullable();
            $table->char('estado', 1)->nullable();
            $table->binary('login_sid')->nullable();
            $table->char('tipo', 1)->nullable();
            $table->primary('codigorubroact');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('act_rubro');
    }
}
