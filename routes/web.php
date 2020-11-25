<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\principal;
use App\Http\Controllers\Catalogo\gato;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


        Route::get('/' , [principal::class, 'index']);
        Route::get('Catalogo/gatos/{id}',[gato::class, 'gatos']); 
        Route::get('Catalogo/perros/{id}',[gato::class, 'perro']);  
         
        Route::get('Contactos', [principal::class, 'contactos']);
          
