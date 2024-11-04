<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuTable extends Migration
{
    public function up()
    {
        Schema::create('Menu', function (Blueprint $table) {
            $table->id('men_id');
            $table->string('men_clave', 10)->unique();
            $table->string('men_platillo', 50);
            $table->integer('men_calorias');
            $table->string('men_precio', 10);
            $table->enum('men_disponibilidad', ['Si', 'No']);
            $table->unsignedBigInteger('men_caf_id');
            $table->unsignedBigInteger('men_usu_id');
            $table->foreign('men_caf_id')->references('caf_id')->on('Cafeteria')->onDelete('cascade');
            $table->foreign('men_usu_id')->references('usu_id')->on('Usuarios')->onDelete('cascade');
            $table->timestamps(); // Si deseas incluir las columnas created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('Menu');
    }
}

