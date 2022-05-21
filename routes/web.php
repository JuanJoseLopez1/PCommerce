<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('inicio');

Auth::routes();

Route::resource('productos', App\Http\Controllers\ProductoController::class)->middleware('auth.admin');
Route::resource('carritos', App\Http\Controllers\CarritoController::class)->middleware('auth');
Route::resource('mensajes', App\Http\Controllers\msgController::class);

Route::get('/technicalService', function () {
    return view('principal\technicalservice');
})->name('technical.service');

Route::get('/Maintance', function () {
    return view('principal\maintance');
})->name('maintance');

Route::get('/Location', function () {
    return view('principal\location');
})->name('location');

Route::get('/aboutus', function () {
    return view('principal\aboutus');
})->name('aboutus');

Route::get('/contactUs', function () {
    return view('principal\contact');
})->name('contactus');


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/store', [App\Http\Controllers\ProductoController::class, 'home'])->name('producto.principal');
// Route::get('/home', [App\Http\Controllers\ProductoController::class, 'home'])->name('producto.principal');
// Route::get('/', [App\Http\Controllers\ProductoController::class, 'home'])->name('producto.principal');

//Route::get('/productos', [App\Http\Controllers\ProductoController::class, 'index'])->name('producto.index');
//Route::get('/carrito', [App\Http\Controllers\CarritoController::class, 'index'])->name('carrito.index');
