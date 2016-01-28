<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivosRespaldoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('act_activos_respaldo', function (Blueprint $table) {
            $table->integer('codigoactivointerno')->nullable();
            $table->integer('codigoactivo');
            $table->integer('codigotransaccion');
            $table->string('descripcionactivo', 700);
            $table->double('valorinicial')->nullable();
            $table->integer('vidautilinicial')->nullable();
            $table->integer('tiporubroact')->nullable();
            $table->integer('idsssrubro')->nullable();
            $table->string('serie', 50)->nullable();
            $table->string('numerofactura', 20)->nullable();
            $table->timestamp('fecha_modificacion', 3)->nullable()->default(DB::raw('CURRENT_TIMESTAMP(0)'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('act_activos_respaldo');
    }
}
