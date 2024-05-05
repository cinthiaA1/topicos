<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlumnosController;
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
});

Route::get('/', [HomeController::class, 'index']);
//Route::get('/',[AlumnosController::class,'index']);
Auth::routes();

Route::resource('/alumnos',AlumnosController::class);
Route::get('/buscar-alumnos', 'App\Http\Controllers\AlumnosController@buscar')->name('buscar-alumnos');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
