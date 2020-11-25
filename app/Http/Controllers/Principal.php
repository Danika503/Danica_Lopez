<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Principal extends Controller
{
    public function index(){
        return view('principal')  ;
}
public function contactos(){
        return view('contactos')  ;
}
}