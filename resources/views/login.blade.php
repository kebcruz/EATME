<!DOCTYPE html>
<html lang="es" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión | EAT-ME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    @stack('css')
</head>

<body class="h-screen flex"> 
    <!-- Contenedor principal -->
    <div class="flex flex-row h-full w-full">
        
        <!-- Mitad izquierda - Color verde -->
        <div class="flex flex-col bg-green-900 text-white w-1/2 items-center justify-center p-8">
            <h1 class="text-8xl text-center font-bold mb-4">Bienvenidos a EAT-ME</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('login.submit') }}"  class="w-full max-w-sm">
                @csrf
                <div class="mb-2">
                    <label for="use_clave" class="block text-sm font-medium">Matricula</label>
                    <input type="text" id="use_clave" name="usu_clave" required class="mt-1 block w-full p-2 border rounded-md" placeholder="Matricula" style="background-color: #fff; color: #000;">
                </div>
                <div class="mb-1">
                    <label for="use_password" class="block text-sm font-medium">Contraseña</label>
                    <input type="password" id="usu_password" name="usu_password" required class="mt-1 block w-full p-2 border rounded-md" placeholder="Contraseña" style="background-color: #fff; color: #000;">
                </div>
                <button type="submit" class="w-full bg-yellow-200 hover:bg-yellow-300 text-black font-bold py-2 px-4 rounded mt-4">Iniciar Sesión</button>
            </form>
            
        </div>

        <!-- Mitad derecha - Imagen -->
        <div class="w-1/2 flex items-center justify-center">
            <img src="{{ asset('imagenes/plato.jpeg') }}" alt="Imagen de inicio" class="h-auto max-w-full object-cover">
        </div>
    </div>

    @stack('js')
</body>
</html>
