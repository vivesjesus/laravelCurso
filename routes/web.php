<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
       return view('welcome');
      // return "texto";
});
//bienvenido version 2

Route::get('/prueba2', function () {
        return view('prueba2');
 });
 
 Route::get('/contacto', function () {
        return view('contacto');
 })->name ("contacto");

Route::get('/prueba', function () {
        return view('prueba');
       // return "texto";
 });
 Route::get('/custom', function () {
        $datos=[];
        for ($i=0;$i<10;$i++){
                $datos[$i]=$i+1;
        }
        $mensaje="Hola que tall";
        $parametros=[
                "msj"=>$mensaje,
                "datos"=>$datos
        ];
        return view('custom',$parametros);
 });
