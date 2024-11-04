<?php

use App\Http\Controllers\ComprarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;


Route::get('/login', [HomeController::class, 'showLoginForm'])->name('login');
Route::post('/login', [HomeController::class, 'login'])->name('login.submit');

// Otras rutas
Route::get('/', [ComprarController::class, 'inicio'])->name('inicio');
Route::get('/servicios', [ComprarController::class, 'servicios'])->name('servicios');
Route::get('/agenda', [ComprarController::class, 'agenda'])->name('agenda');
Route::get('/comprar', [ComprarController::class, 'comprar'])->name('comprar');
Route::get('/comprar/menu', [ComprarController::class, 'menu'])->name('menu');
Route::get('/comprar/carrito', [ComprarController::class, 'carrito'])->name('carrito');
Route::get('/comprar/carrito/pedido', [ComprarController::class, 'pedido'])->name('pedido');

// Rutas de registro
Route::get('/registro', [AuthController::class, 'showRegisterForm'])->name('registro');
Route::post('/registro', [AuthController::class, 'registro'])->name('registro');

/*Posts
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create',[PostController::class, 'create']);
Route::get('/posts/{post}/{categoria?}', [Postcontroller::class, 'show']);*/