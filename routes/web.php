<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

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

//Ruta principal del proyecto
Route::get('/',[IndexController::class,'index']);

//rutas para sitio
Route::resource('site',SiteController::class);

//rutas para servicio
Route::resource('service',ServiceController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//crear la ruta para hacer una reserva
route::get('getSite/{site}',[ReservationController::class,'getSite'])->name('getSite');
