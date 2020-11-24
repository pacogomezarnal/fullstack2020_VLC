<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlumnosController extends Controller
{
    function index(){
        $alumnos = DB::table('alumnos')->get();
        return view('alumnos.index',["dataAlumnos"=>$alumnos]);
    }
    function show($id){
        //$alumnos = DB::table('alumnos')->get();
        dd($id);
        return view('alumnos.show');
    }
}
