<!DOCTYPE html>
<html lang="es" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Home')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    @stack('css')
</head>

<body class="h-full flex"> 
    <!-- Barra lateral izquierda (usuarios) -->
    <aside class="w-40 bg-green-900 text-white flex flex-col h-full">
        <div class="p-8 font-bold text-lg text-center"></div>
        <nav class="flex-grow">
            <ul class="space-y-4 px-4">
                <li>
                    <a href="{{ route('inicio') }}" class="text-white hover:bg-green-700 block py-2 rounded text-center">Inicio</a>
                </li>
                <li>
                    <a href="{{ route('servicios') }}" class="text-white hover:bg-green-700 block py-2 rounded text-center">Servicios</a>
                </li>
                <li>
                    <a href="#" class="text-white hover:bg-green-700 block py-2 rounded text-center">Preguntas</a>
                </li>
            </ul>
        </nav>
        <div class="p-4 text-center text-xs">Aviso de Privacidad</div>
    </aside>

    <!-- Contenido principal -->
    <div class="flex flex-col flex-grow">
        <!-- Barra superior -->
        <header class="bg-green-900 text-white flex items-center justify-center p-8 relative">
            <div class="text-xl font-bold absolute left-1/2 transform -translate-x-1/2">EAT-ME</div>
            <div class="flex items-center space-x-4 absolute right-4">
                <a href="{{ route('login') }}">
                    <img src={{ asset('imagenes/perfil.png') }} alt="Perfil" class="w-10 h-10 rounded-full">
                </a>
                <img src={{ asset('imagenes/salida.png') }} alt="Salir" class="w-10 h-10">
            </div>
        </header>

        <!-- Contenido dinámico de la página -->
        <main class="p-8">
            @yield('content')
        </main>

        <!-- Pie de página -->
        <footer class="bg-white border-t border-gray-200 mt-8 p-4">
            <p class="text-center text-gray-500 text-sm">
                &copy; 2024 SEDITEC. Todos los derechos reservados.
            </p>
        </footer>
    </div>

    @stack('js')
</body>
</html>
