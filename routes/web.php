<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\UserDetaController;
use App\Http\Controllers\RegistroPrvController;
use App\Http\Controllers\AltaPrdController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\DetalleProvController;
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
});

Route::get('/pilotos/{name}', function(string $name){ 
    return 'Texto';   
})->where('name', '[A-Za-z]+');

Route::get('/avion/{id}', function (string $id) {
    return 'Hola';
})->where('id', '[0-9]+');

Route::get('/usuario/{id}/{name}', function (string $id, string $name) {
    return 'Cinthia';
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

Route::get('/pasajero/{id}/{name}', function (string $id, string $name) {
    return ' HEllo';
})->whereNumber('id')->whereAlpha('name');

//rutas de controladores
Route::get('/index', [IndexController::class, 'index']);
Route::get('/usuario', [UsuarioController::class, 'usuario']);
Route::get('/detalleproducto', [DetallePrdController::class, 'detalleprd']);
Route::get('/registro', [RegistroPrvController::class, 'registro']);
Route::get('/usuariodetalle', [UserDetaController::class, 'usuariodeta']);
Route::get('/cliente', [ClienteController::class, 'cliente']);
Route::get('/producto', [ProductoController::class, 'producto']);
Route::get('/proveedor', [DetalleProvController::class, 'proveedor']);

Route::get('/', [HomeController::class, 'index']);
Route::get('/vuelos', [FlightController::class, 'index']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
