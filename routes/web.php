<?php

use Illuminate\Support\Facades\Route;

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
//Asume que tiene extension.blade.php
// Route::get('/', function () {
//     $nombre ="Leosh";
//     return view('home',compact('nombre')); //['nombre'=>$nombre]
    
// });
$portfolio =[
    // ['title' =>'Proyecto #1'],
    // ['title' =>'Proyecto #2'],
    // ['title' =>'Proyecto #3'],
    // ['title' =>'Proyecto #4'],
];
Route::view('/','home')->name('home');

Route::view('/about','about')->name('about');

Route::view('/portfolio','portfolio',compact('portfolio'))->name('portfolio');

Route::view('/contact','contact')->name('contact');
//retornar vista
// Route::view('/','home',['nombre'=>'Leonel']);

// Route::get('saludo/{nombre?}',function($nombre="invitado") {
//     return 'dadadasdasa '.$nombre;
// });

// Route::get('contactos',function()  {
//     return "Seccion de contactos";
// })->name('contactos');

// Route::get('/',function() {
// echo "<a href='".route('contactos')."'>Contactos  1</a><br>";
// echo "<a href='".route('contactos')."'>Contactos  2</a><br>";
// echo "<a href='".route('contactos')."'>Contactos  3</a><br>";
// echo "<a href='".route('contactos')."'>Contactos  4</a><br>";
// echo "<a href='".route('contactos')."'>Contactos  5s</a><br>";
// });
