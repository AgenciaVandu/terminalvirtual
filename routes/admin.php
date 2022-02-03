<?php

use App\Http\Controllers\Admin\PageController;
use Illuminate\Support\Facades\Route;



Route::get('/pages',[PageController::class,'index'])->name('pages.index');

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('dashboard');
})->name('dashboard');
