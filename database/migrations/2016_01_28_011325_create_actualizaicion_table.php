<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActualizaicionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actualizaicion', function (Blueprint $table) {
            $table->string('corre', 5)->nullable();
            $table->string('expr1', 5)->nullable();
            $table->float('no_ci')->nullable();
            $table->float('expr2')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('actualizaicion');
    }
}
