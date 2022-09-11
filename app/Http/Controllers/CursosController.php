<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{
    //
    public function index(){
        return "Pagina cursos";
    }

    public function create($curso){
        return "BIenvenido al curso: $curso";
    }

    public function show()
    {
       return "Hello " ;
    }

}
