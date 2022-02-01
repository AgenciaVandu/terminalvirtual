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

Route::get('/', function () {
    return view('index');
});
Route::get('/soluciones', function () {
    return view('soluciones');
});
Route::get('/aliados', function () {
    return view('aliados');
});
Route::get('/empresa', function () {
    return view('empresa');
});

Route::get('/mantenimiento', function () {
    return view('modulos.mantenimiento');
});

Route::get('/llantas', function () {
    return view('modulos.llantas');
});

Route::get('/operadores', function () {
    return view('modulos.operadores');
});

Route::get('/disponibilidad', function () {
    return view('modulos.disponibilidad');
});

Route::get('/carta-porte', function () {
    return view('modulos.carta-porte');
});

Route::get('/combustible', function () {
    return view('modulos.combustible');
});

Route::get('/estadisticas', function () {
    return view('modulos.estadisticas');
});

Route::get('/contacto', function () {
    return view('contacto');
});
Route::get('/preguntas-frecuentes', function () {
    return view('faq');
});
Route::get('/sap', function () {
    return view('sap');
});
Route::get('/login', function () {
    return view('terminal.login');
});
Route::get('/checkout', function () {
    return view('terminal.checkout');
});
Route::get('/bill', function () {
    return view('terminal.bill');
});
Route::get('/gracias-por-tu-pago', function () {
    return view('terminal.bill-pagada');
});


Route::post('/sendmail','KananfleetController@email')->name('email');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
