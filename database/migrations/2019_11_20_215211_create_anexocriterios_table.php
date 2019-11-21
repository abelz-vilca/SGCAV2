<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnexocriteriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anexocriterios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('archivoac')->nullable();
            $table->unsignedBigInteger('criterioestandar_id');
            $table->foreign('criterioestandar_id')->references('id')->on('criterio_estandar');
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
        Schema::dropIfExists('anexocriterios');
    }
}
