<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccesosTable extends Migration
{
    public function up()
    {
        Schema::create('Accesos', function (Blueprint $table) {
            $table->id('acc_id'); // Crea la columna acc_id como un campo de incremento automático
            $table->enum('acc_permiso', ['leer', 'escribir', 'editar', 'eliminar']); // Define la columna acc_permiso como un ENUM
            $table->timestamp('acc_fecha_acceso')->default(DB::raw('CURRENT_TIMESTAMP')); // Columna para fecha de acceso
            $table->unsignedBigInteger('acc_usu_id')->nullable(); // Clave foránea para el usuario, puede ser NULL
            
            // Definición de la clave primaria
            $table->primary('acc_id');

            // Definición de la clave foránea
            $table->foreign('acc_usu_id')->references('usu_id')->on('tbUsuarios')->onDelete('cascade');
            
            // Adicionalmente, puedes agregar timestamps para las columnas created_at y updated_at
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Accesos');
    }
}

