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
                <td>
                    <a href="{{route('curso.show',['curso'=>$curso])}}"><i class="fas fa-eye"></i></a>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#borrar{{$curso->id}}">
                        Borrar
                    </button>
                </td>
            </tr>
                     <!-- Modal Borrar-->
                     <div class="modal fade" id="borrar{{$curso->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Borrar curso {{$curso->id}}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="{{route('curso.destroy',['curso'=>$curso])}}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <div class="form-group">
                                        <input type="submit" class="btn btn-danger delete-user" value="Delete">
                                    </div>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
        @endforeach
    </tbody>


</table>
@endsection
