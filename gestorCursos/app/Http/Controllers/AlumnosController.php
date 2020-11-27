<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Alumno;
use App\Models\Curso;
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
        $cursos=Curso::all();
        return view('alumnos.create',['cursos'=>$cursos]);
    }

    function store(AlumnoPost $request){

        //Validamos
        $request->validated();

        $data=$request->all();
        $cursoId=$data["curso"];
        unset($data["curso"]);
        $alumno = new Alumno($data);
        $alumno->save();
        $alumno->cursos()->attach($cursoId);

        return redirect("alumnos");
    }
}
