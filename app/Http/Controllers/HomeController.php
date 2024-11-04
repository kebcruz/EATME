<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios; 
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return redirect()->route('login'); // Redirige a la vista de inicio de sesión
    }
    // Método para mostrar el formulario de inicio de sesión
    public function showLoginForm()
    {
        return view('login'); // Asegúrate de que tu vista se llama 'login.blade.php'
    }

        // Método para manejar el inicio de sesión
    public function login(Request $request)
    {
        $credentials = $request->only('usu_clave', 'usu_password'); // Usa los nombres correctos

        // Verifica las credenciales del usuario
        $user = Usuarios::where('usu_clave', $credentials['usu_clave'])->first();

        if ($user && Hash::check($credentials['usu_password'], $user->usu_password)) {
            // Autenticación exitosa
            return redirect()->route('inicio')->with('success', 'Has iniciado sesión correctamente.');
        } else {
            return back()->withErrors([
                'usu_clave' => 'Las credenciales no son válidas.',
            ]);
        }
        
    }
}
