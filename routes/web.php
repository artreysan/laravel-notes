<?php

use Illuminate\Support\Facades\Route;

/*
Here definite the routes in the app.
*/

// Access to page http://127.0.0.1:8000/
Route::get('/', function () {
    return view('welcome');//The view is in ./resources/views/welcome.blade.php
});

// Access to page http://127.0.0.1:8000/cursos
Route::get('cursos',function(){
    return "Pagina cursos";
});

// Access to page http://127.0.0.1:8000/cursos/create
// Access to page http://127.0.0.1:8000/cursos/delete
// {create} usa el parametro de la funcion
Route::get('cursos/{curso}',function($curso){
    return "BIenvenido al curso: $curso";
});

//SIempre se ejecutara el arriba primero dado que es secuencial
Route::get('cursos/create',function(){
    return "BIenvenido al curso: create 2";
});




