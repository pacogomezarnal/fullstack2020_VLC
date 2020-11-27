@extends('template.layout')

@section('content')
<h2>LISTADO DE ALUMNOS</h2>

<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido 1</th>
            <th scope="col">Apellido 2</th>
            <th scope="col">Correo</th>
            <th scope="col">Creado</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dataAlumnos as $alumno)
            <tr>
            <th scope="row">{{$alumno->id}} (
                @foreach ($alumno->cursos as $curso)
                {{$curso->nombre}},
                @endforeach
                )
            </td>
                <td>{{$alumno->nombre}}</td>
                <td>{{$alumno->apellido1}}</td>
                <td>{{$alumno->apellido2}}</td>
                <td>{{$alumno->correo}}</td>
                <td>{{$alumno->created_at}}</td>
                <td><a href="{{route('alumnos.show',['id'=>$alumno->id])}}"><i class="fas fa-eye"></i></a></td>
            </tr>
        @endforeach
    </tbody>


</table>
@endsection
