@extends('template.layout')

@section('content')
<h2>DETALLE ALUMNO</h2>

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
        <tr>
        <th scope="row">{{$alumno->id}}</td>
            <td>{{$alumno->nombre}}</td>
            <td>{{$alumno->apellido1}}</td>
            <td>{{$alumno->apellido2}}</td>
            <td>{{$alumno->correo}}</td>
            <td>{{$alumno->created_at}}</td>
            <td></td>
        </tr>
    </tbody>


</table>
@endsection
