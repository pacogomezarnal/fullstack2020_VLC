<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    function index(){
        return view('alumnos.index');
    }
}
