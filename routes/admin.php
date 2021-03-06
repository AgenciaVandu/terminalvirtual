<?php

use App\Charts\ReferencesChart;
use App\Http\Controllers\Admin\PageController;
use App\Http\Livewire\Admin\Clients;
use App\Http\Livewire\Admin\Curriencies;
use App\Http\Livewire\Admin\Users;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth:sanctum', 'verified'])->get('/', function (ReferencesChart $chart) {
    if (auth()->user()->hasRole('admin') || auth()->user()->hasRole('contenido')) {
        if (auth()->user()->hasRole('admin')) {
            return view('dashboard', ['chart' => $chart->build()]);
        }else{
            return redirect()->route('pages.index');
        }
    }else{
        return redirect()->route('index');
    }

})->name('dashboard');

Route::get('/pages',[PageController::class,'index'])->name('pages.index');
Route::get('/clients',Clients::class)->name('clients');
Route::get('/currencies',Curriencies::class)->name('curriencies');
Route::get('/users',Users::class)->name('users');
