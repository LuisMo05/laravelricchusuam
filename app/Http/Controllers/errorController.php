<?php

namespace App\Http\Controllers;

use Faker\Provider\ar_EG\Text;
use Illuminate\Http\Request;

class errorController extends Controller
{
    public function index($word)
    {
        //return "se entro al controlador, palabra: $word";
        return view('errors.404');
    }
}
