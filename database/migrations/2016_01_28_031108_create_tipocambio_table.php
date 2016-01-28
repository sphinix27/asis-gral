<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipocambioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('act_tipocambio', function (Blueprint $table) {
            $table->increments('codigofecha');
            $table->timestamp('fecha', 3)->unique();
            $table->double('tipocambio');
            $table->decimal('tipoufv', 18 ,6)->nullable();
            $table->binary('login_sid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('act_tipocambio');
    }
}
