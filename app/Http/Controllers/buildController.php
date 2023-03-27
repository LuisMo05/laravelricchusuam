<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\errorController;

class buildController extends Controller
{
    public function index()
    {
        return view('build');
    }
    
}
