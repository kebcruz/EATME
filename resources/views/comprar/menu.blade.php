@extends('layouts.app')
@section('title', 'Comprar | Menú')
@section('content')
    <div class="container">
        <h1>Menú</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Clave</th>
                    <th>Platillo</th>
                    <th>Calorías</th>
                    <th>Precio</th>
                    <th>Disponibilidad</th>
                </tr>
            </thead>
            <tbody>
                @foreach($menus as $menu)
                    <tr>
                        <td>{{ $menu->men_id }}</td>
                        <td>{{ $menu->men_clave }}</td>
                        <td>{{ $menu->men_platillo }}</td>
                        <td>{{ $menu->men_calorias }}</td>
                        <td>{{ $menu->men_precio }}</td>
                        <td>{{ $menu->men_disponibilidad }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
