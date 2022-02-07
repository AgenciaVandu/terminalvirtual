<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\TerminalController;
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

Route::get('/', [PageController::class,'index'])->name('index');
Route::get('/aliados', [PageController::class,'aliados'])->name('aliados');
Route::get('/empresa', [PageController::class,'empresas'])->name('empresa');
Route::get('/sap', [PageController::class,'sap'])->name('sap');

Route::get('/soluciones', function () {
    return view('soluciones');
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

/* Route::get('/login', function () {
    return view('terminal.login');
}); */
Route::middleware('auth')->get('/checkout/{reference}', [TerminalController::class,'checkout'])->name('terminal.checkout');
Route::middleware('auth')->get('/bill',[TerminalController::class,'index'])->name('terminal.index');
Route::middleware('auth')->post('/payment/{reference}',[TerminalController::class,'payment'])->name('terminal.payment');
Route::get('checkout/directChargeOpenpay/responsepayment/', [TerminalController::class, 'validateChargeOpenPay']);

Route::get('/gracias-por-tu-pago', function () {
    return view('terminal.bill-pagada');
})->name('terminal.aproved');


Route::post('/sendmail','KananfleetController@email')->name('email');
