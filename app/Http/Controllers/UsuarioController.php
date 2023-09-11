<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    //
    public function cadastrar (){
        return "esta entrando no cadastro";
    }
    public function home (){
        return view ('home');
    }
}
