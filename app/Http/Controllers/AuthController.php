<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios; 
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function registro(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'usu_clave' => 'required|unique:Usuarios',
            'usu_nombre' => 'required',
            'usu_paterno' => 'required',
            'usu_materno' => 'required',
            'usu_genero' => 'required',
            'usu_tiposangre' => 'nullable',
            'usu_telefono' => 'required',
            'usu_gmail' => 'required|email|unique:Usuarios,usu_gmail',
            'usu_password' => 'required|min:6', // Asegúrate de validar la contraseña
        ]);

        // Encriptar la contraseña antes de guardarla
        $validatedData['usu_password'] = Hash::make($validatedData['usu_password']);
        
        // Crear el usuario en la base de datos
        Usuarios::create($validatedData);
        
        // Redirigir al usuario a la página de inicio de sesión con un mensaje de éxito
        return redirect()->route('login')->with('success', 'Usuario creado correctamente');
    }

    public function showRegisterForm()
    {
        return view('registro'); // Asegúrate de que la vista se llame 'registro.blade.php'
    }
}
