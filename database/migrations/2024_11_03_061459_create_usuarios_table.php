<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    public function up()
    {
        Schema::create('Usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('usu_clave')->unique();
            $table->string('usu_nombre');
            $table->string('usu_paterno');
            $table->string('usu_materno');
            $table->string('usu_genero');
            $table->string('usu_tiposangre')->nullable();
            $table->bigInteger('usu_telefono'); // Asegúrate de usar bigint si es necesario
            $table->string('usu_gmail')->unique();
            $table->string('usu_rol');
            $table->string('use_password'); // Cambia esto
            $table->timestamps();
        });
    }
    

    public function down()
    {
        Schema::dropIfExists('Usuarios');
    }
}

