<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller{
    public function index($curso, $categoria = null){
        if($categoria){
            return view('blog.show');
        }else{
            return "Bienvenido al blog del curso $curso";
        }
    }
}
