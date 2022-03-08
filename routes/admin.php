<?php

use App\Charts\ReferencesChart;
use App\Http\Controllers\Admin\PageController;
use App\Http\Livewire\Admin\Clients;
use App\Http\Livewire\Admin\Curriencies;
use Illuminate\Support\Facades\Route;



Route::/* middleware('can:admin')-> */get('/pages',[PageController::class,'index'])->name('pages.index');
Route::get('/clients',Clients::class)->name('clients');
Route::get('/currencies',Curriencies::class)->name('curriencies');

Route::middleware(['auth:sanctum', 'verified'])->get('/', function (ReferencesChart $chart) {
    if (!auth()->user()->hasRole('admin')) {
        return redirect()->route('index');
    }
    return view('dashboard', ['chart' => $chart->build()]);
})->name('dashboard');
