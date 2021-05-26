<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return view('cursos.index');
    }

    public function create(){
        return view('cursos.create');
    }

    //public function show($curso){
    //    return "Bienvenido al curso $curso";
    //}

    public function show($curso, $categoria = null){
        /* opcion 1 */ //return view('cursos.show')->with('curso', $curso)->with('categoria', $categoria);
        /* opcion 2 */ return view('cursos.show', compact('curso', 'categoria'));
        /* opcion 3 */ //return view('cursos.show', ['curso' => $curso, 'categoria' => $categoria]);
    }
}