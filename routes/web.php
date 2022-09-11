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

//Para no tener tantas url lo que podemos hacer es lo siguiente
//Se coloca el ? para idicar que es opcional, si nos e coloca en la url el valor de categoria es null 
Route::get('blog/{curso}/{categoria?}', function($curso, $categoria = null){
    if($categoria){
        return "Bienvenido al blog del curso $curso en la categoria $categoria";
    }else{
        return "Bienvenido al blog del curso $curso";
    }
    /*
    Probar con http://localhost:8000/blog/laravel/javascript
               http://localhost:8000/blog/laravel/c++
               http://localhost:8000/blog/laravel
    */
});





