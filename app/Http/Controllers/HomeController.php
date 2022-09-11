<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Here if only for '/'
    //As it is only a route we place __invoke 
    public function __invoke(){
        return view('welcome');    
    }
}
