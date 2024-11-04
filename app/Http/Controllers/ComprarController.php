<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;


class ComprarController extends Controller
{
    public function inicio()
    {
        return view('comprar.inicio');
    }
    public function servicios()
    {
        return view('comprar.servicios');
    }
    public function comprar()
    {
        return view('comprar.comprar');
    }
    public function menu()
    {
        $menus = Menu::all();
        return view('comprar.menu', compact('menus'));
    }
    public function carrito()
    {
        return view('comprar.carrito');
    }
    public function pedido()
    {
        return view('comprar.pedido');
    }
    public function agenda()
    {
        return view('comprar.agenda');
    }
    
}
