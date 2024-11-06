@extends('layouts.app')

@section('title', 'Servicios')

@section('content')
<div class="max-w-4xl mx-auto px-4">
    <h1 class="text-3xl font-bold text-gray-900 mb-6 text-center">Bienvenidos a EAT-ME</h1>

    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
        <!-- Comprar -->
        <a href="{{ route('comprar') }}" class="flex flex-col items-center">
            <img src="{{ asset('imagenes/comprar.png') }}" alt="Comprar" class="w-70 h-60 mb-2">
            <span class="text-lg font-medium text-gray-700">Comprar</span>
        </a>
        <!--Citas agendadas-->
        <a href="{{ route('agenda') }}" class="flex flex-col items-center">
            <img src="{{ asset('imagenes/agenda.png') }}" alt="Comprar" class="w-70 h-60 mb-2">
            <span class="text-lg font-medium text-gray-700">Citas agendadas</span>
        </a>
    </div>
</div>
@endsection