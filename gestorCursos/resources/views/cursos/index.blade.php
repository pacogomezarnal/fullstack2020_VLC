@extends('template.layout')

@section('content')
<h2>LISTADO DE CURSOS</h2>

<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cursos as $curso)
            <tr>
            <th scope="row">{{$curso->id}}</td>
                <td>
                    {{$curso->nombre}} (
                    @foreach ($curso->entregables as $entregable)
                    {{$entregable->nombre}},
                    @endforeach
                    )
                </td>
                <td><a href="{{route('curso.show',['curso'=>$curso])}}"><i class="fas fa-eye"></i></a></td>
            </tr>
        @endforeach
    </tbody>


</table>
@endsection
