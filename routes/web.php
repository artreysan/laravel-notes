<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;//This call to the Controller
use App\Http\Controllers\CursosController;//This call to the Controller
use App\Http\Controllers\BlogController;//This call to the Controller

//This sentence call the unique function __invoke in app/Http/Controllers/HomeController.php 
Route::get('/', HomeController::class); 

//This sentence call the function index in (./app/Http/Controllers/CursosController.php) 
Route::get('cursos',[CursosController::class, 'index']);

//This sentence call the function create in (./app/Http/Controllers/CursosController.php)
Route::get('cursos/{curso}',[CursosController::class,'create']); 

//This sentence call the function index in (./app/Http/Controllers/BlogController.php)
Route::get('blog/{curso}/{categoria?}',[BlogController::class, "index"] );

//Test with:
/* 
http://localhost:8000
http://localhost:8000/cursos
http://localhost:8000/cursos/laravel
http://localhost:8000/blog/laravel/javascript
*/






