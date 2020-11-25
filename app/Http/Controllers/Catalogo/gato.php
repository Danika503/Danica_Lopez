<?php

namespace App\Http\Controllers\Catalogo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class gato extends Controller
{
      public function gatos (){
        $alimento = [
            'Codigo:111',
            'precio:1600'

        ];
        $mensaje="catalogo para gatos ";

        $juguetes =[
            'Codigo:666',
            'precio:22600'
           

        ];
        $comedero =[
            'Codigo:222',
            'precio:35900'
           

        ];
        return view('catalogo.gatos')
        -> with('alm',$alimento)
        -> with('msg',$mensaje)
        -> with('jug',$juguetes)
        -> with('com',$comedero);

    }
    public function perro (){
        $alimento = [
            'Codigo:112',
            'precio:1600'

        ];
        $mensaje="catalogo para perros ";

        $humedo =[
            'Codigo:667',
            'precio:22500'
           

        ];
        $correa =[
            'Codigo:222',
            'precio:21900'
           

        ];
        return view('catalogo.perros')
        -> with('alm',$alimento)
        -> with('msg',$mensaje)
        -> with('hum',$humedo)
        -> with('cor',$correa);

    }

}
