<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBajafirmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('act_bajafirmas', function (Blueprint $table) {
            $table->integer('firmabaja1')->nullable();
            $table->integer('firmabaja2')->nullable();
            $table->integer('firmabaja3')->nullable();
            $table->integer('codigoactivo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('act_bajafirmas');
    }
}
