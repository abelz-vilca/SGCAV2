<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('nombres');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->date('f_nac')->nullable();
            $table->string('dni', 8)->unique();
            $table->string('email')->unique()->nullable();;
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('rol');
            $table->string('foto')->default('user.png');

            //Contacto
            $table->string('tel')->nullable();
            $table->string('cel')->nullable();
            //otros
            $table->tinyInteger('sexo')->default('1');
            $table->tinyInteger('estado_login')->default('0');

            $table->unsignedBigInteger('programa_id');
            $table->foreign('programa_id')->references('id')->on('programas')->onDelete('cascade');
            $table->rememberToken();
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
        Schema::dropIfExists('usuarios');
    }
}
