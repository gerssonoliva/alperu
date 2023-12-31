<?php

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::get('/nosotros', function(){
    return view('shared-section-nosotros.nosotros');
});

Route::get('/servicios', function(){
    return view('shared-section-servicios.servicios');
});

Route::get('/proyectos', function(){
    return view('shared-section-proyectos.proyectos');
});

Route::get('/contactanos', function(){
    return view('shared-section-contactanos.contactanos');
});

