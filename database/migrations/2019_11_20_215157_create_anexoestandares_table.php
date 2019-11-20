<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnexoestandaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anexoestandares', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('archivoae')->nullable();
            $table->unsignedBigInteger('anexoep_id');
            $table->foreign('anexoep_id')->references('id')->on('estandar_programa');
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
        Schema::dropIfExists('anexoestandares');
    }
}
