<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(){
        return view('aloha.index');
    }

    public function helloworld($hola, $mundo = null){
        return view('aloha.hello', compact('hola', 'mundo'));
    }
}
