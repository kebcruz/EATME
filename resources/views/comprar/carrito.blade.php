@extends('layouts.app')
@section('title', 'Comprar | Carrito')
@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4">Carrito</h1>
    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Ingredientes</th>
                    <th>Calorías(kcal)</th>
                    <th>Azúcares(g)</th>
                    <th>Sodio(g)</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Total</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- Datos de ejemplo -->
                <tr>
                    <td>1</td>
                    <td>Pizza</td>
                    <td>Deliciosa pizza con extra queso</td>
                    <td>2.5</td>
                    <td>50</td>
                    <td>2.3</td>
                    <td>1</td>
                    <td>$120.00</td>
                    <td>$120.00</td>
                    <td>
                        <a href="#" class="btn btn-danger btn-sm">Quitar</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Hamburguesa</td>
                    <td>Hamburguesa clásica con papas</td>
                    <td>1.5</td>
                    <td>45</td>
                    <td>1.5</td>
                    <td>2</td>
                    <td>$80.00</td>
                    <td>$160.00</td>
                    <td>
                        <a href="#" class="btn btn-danger btn-sm">Quitar</a>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>$280.00</td>
                    <td>
                        <a href="{{ route('pedido') }}" class="btn btn-info btn-sm">Pagar</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
