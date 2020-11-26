<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Alumno;
use App\Http\Requests\AlumnoPost;

class AlumnosController extends Controller
{
    function index(){
        //$alumnos = DB::table('alumnos')->get();
        $alumnos=Alumno::all();
        return view('alumnos.index',["dataAlumnos"=>$alumnos]);
    }
    function show($id){
        //$alumnos = DB::table('alumnos')->get();
        $alumno=Alumno::find($id);
        return view('alumnos.show',["alumno"=>$alumno]);
    }
    function create(){
        return view('alumnos.create');
    }

    function store(AlumnoPost $request){

        //Validamos
        $request->validated();

        $data=$request->all();
        $alumno = new Alumno($data);
        $alumno->save();

        return redirect("alumnos");
    }
}
