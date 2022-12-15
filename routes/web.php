<?php

use App\Http\Controllers\AuthControllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Inicios;
use App\Http\Controllers\Registros;

Route::get('/shop', [CartController::class, 'shop'])->name('shop');

/* Rutas para sinopsis */
Route::get('/imaginacion/{name}',[Resumenes::class,'libs'])->name('imaginacion');

/* Rutas para carrito de compras */
Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');
Route::post('/add', [CartController::class, 'add'])->name('cart.store');
Route::post('/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/clear', [CartController::class, 'clear'])->name('cart.clear');

/* Rutas para inicio de sesión */
Route::get('/',[AuthControllers::class,'index'])->name('login');
Route::post('/logear',[AuthControllers::class,'logear'])->name('logear');
Route::get('/logout',[AuthControllers::class,'logout'])->name('logout');

/* Rutas para registrar usuarios */
Route::get('/registro',[Registros::class,'index'])->name('registro');
Route::post('/registrar',[Registros::class,'registrar'])->name('registrar');

/* Para los inicios */
//Route::get('/shop',[Inicios::class,'index'])->name('shop');

