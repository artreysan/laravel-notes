<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\BlogController;

Route::get('/', HomeController::class); 

//Group of controller
Route::controller(CursosController::class)->group(function(){
    Route::get('cursos','index');
    Route::get('cursos/{curso}','create'); 
});

Route::get('blog/{curso}/{categoria?}',[BlogController::class, "index"] );

//Test with:
/* 
http://localhost:8000
http://localhost:8000/cursos
http://localhost:8000/cursos/laravel
http://localhost:8000/blog/laravel/javascript
*/






