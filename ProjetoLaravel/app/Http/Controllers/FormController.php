<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
        return view('entrada');
    }
    public function entrada(){
        return view('entrada');
    }
    public function playstation(){
        return view('playstation');
    }
     public function layout(){
        return view('layout');
    }
    public function pc(){
        return view('pc');
    }
    public function xbox(){
        return view('xbox');
    }
     public function contactos(){
        return view('contactos');
    }
    public function mostrarForm(){
        return view('contactos');
    }
public function processarForm(Request $request)
{
    $nome=$request->nome;
    $tipo=$request->tipo;
    $jogos=$request->jogos;
    
    return view('form', [
        'nome'=>$nome,
        'tipo'=>$tipo,
        'jogos'=>$jogos
    ]);
}
   
}


