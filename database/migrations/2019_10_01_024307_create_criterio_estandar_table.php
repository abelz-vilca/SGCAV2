<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCriterioEstandarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('criterio_estandar', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('archivo')->nullable();
            $table->integer('calificacion')->nullable();
            $table->text('descripcion')->nullable();
            $table->text('justificacion')->nullable();
            $table->date('fecha')->nullable();
            $table->unsignedBigInteger('estandar_id');
            $table->unsignedBigInteger('criterio_id');
            $table->foreign('estandar_id')->references('id')->on('estandares');
            $table->foreign('criterio_id')->references('id')->on('criterios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('criterio_estandar');
    }
}
