<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCafeteriaTable extends Migration
{
    public function up()
    {
        Schema::create('tbCafeteria', function (Blueprint $table) {
            $table->id('caf_id');
            $table->string('caf_clave', 10)->unique();
            $table->string('caf_nombre', 50);
            $table->string('caf_ubicacion', 50);
            $table->char('caf_horario', 1);
            $table->integer('caf_telefono');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbCafeteria');
    }
}
