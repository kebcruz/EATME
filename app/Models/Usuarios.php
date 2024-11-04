<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; // Asegúrate de importar esto
use Illuminate\Notifications\Notifiable;

class Usuarios extends Authenticatable // Cambia 'Model' por 'Authenticatable'
{
    use HasFactory, Notifiable;

    protected $table = 'Usuarios'; // Asegúrate de que el nombre de la tabla sea correcto

    // Si tienes timestamps, asegúrate de que esta propiedad esté configurada correctamente
    public $timestamps = false;

    protected $fillable = [
        'usu_clave',
        'usu_nombre',
        'usu_paterno',
        'usu_materno',
        'usu_genero',
        'usu_tiposangre',
        'usu_telefono',
        'usu_gmail',
        'usu_password',
        'usu_rol',
        // Otros campos si es necesario
    ];

    // Opcionalmente, puedes especificar que la contraseña no debe ser incluida en las conversiones a arrays
    protected $hidden = [
        'usu_password',
    ];
}

