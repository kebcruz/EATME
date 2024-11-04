@extends('layouts.app')
@section('title', 'Comprar')
@section('content')
<body>
    <div class="max-w-4xl mx-auto px-4">
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
            <!-- Imagen de Menú -->
            <a href="{{ route('menu') }}" class="flex flex-col items-center">
                <img src="{{ asset('imagenes/menu.png') }}" alt="Menu" class="w-70 h-60 mb-2">
                <span class="text-lg font-medium text-gray-700">Menú</span>
            </a>

            <!-- Imagen de Carrito -->
            <a href="{{ route('carrito') }}" class="flex flex-col items-center">
                <img src="{{ asset('imagenes/carrito.png') }}" alt="Carrito" class="w-70 h-60 mb-2">
                <span class="text-lg font-medium text-gray-700">Carrito</span>
            </a>
        </div>
    </div>
</body>
</html>
@endsection
