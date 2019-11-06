<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_programa', 78);
            $table->integer('CUI');
            $table->unsignedBigInteger('academico_id');
            $table->unsignedBigInteger('facultad_id');
            $table->foreign('academico_id')->references('id')->on('academicos');
            $table->foreign('facultad_id')->references('id')->on('facultades');
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
        Schema::dropIfExists('programas');
    }
}
