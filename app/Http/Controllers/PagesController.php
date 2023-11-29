<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiantes;

class PagesController extends Controller
{
    public function fnIndex(){
        return view('welcome');
    }

    public function fnLista(){
        $xAlumnos = Estudiantes::all();
        return view('pagLista', compact('xAlumnos'));
    }

    public function fnGaleria($numero=null) {
        $valor = $numero;
        $otro = 25;

        return view('pagGaleria', compact('valor', 'otro'));
    }


    //
}