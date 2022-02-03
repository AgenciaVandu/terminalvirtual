<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $aliados = Section::where('name','aliados')->where('page','index')->first();
        $header = Section::where('name','header')->where('page','index')->first();
        return view('index',compact('aliados','header'));
    }

    public function aliados(){
        $aliados = Section::where('name','aliados')->where('page','index')->first();
        return view('aliados',compact('aliados'));
    }

    public function empresas(){
        $clientes = Section::where('name','clientes')->where('page','index')->first();
        return view('empresa',compact('clientes'));
    }

    public function sap(){
        $clientes = Section::where('name','clientes')->where('page','index')->first();
        return view('sap',compact('clientes'));
    }
}
