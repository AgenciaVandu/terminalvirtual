<?php

use App\Http\Controllers\Admin\PageController;
use App\Http\Livewire\Admin\Clients;
use Illuminate\Support\Facades\Route;



Route::get('/pages',[PageController::class,'index'])->name('pages.index');
Route::get('/clients',Clients::class)->name('clients');

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('dashboard');
})->name('dashboard');
