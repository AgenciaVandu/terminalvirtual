<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        if (auth()->user()->hasRole('admin') || auth()->user()->hasRole('contenido')) {
            return view('admin.pages.index');
        }else{
            return redirect()->route('index');
        }

    }
}
