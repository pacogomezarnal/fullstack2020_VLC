@extends('template.layout')

@section('content')
<h2>NUEVO ALUMNO</h2>

<form method="POST" action="{{route('alumnos.store')}}">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Tu nombre">
        </div>
        <div class="form-row">
            <div class="col">
                <div class="form-group">
                    <label for="apellido1">Primer Apellido</label>
                    <input type="text" class="form-control" id="apellido1" name="apellido1" placeholder="Primer apellido">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="apellido2">Segundo Apellido</label>
                    <input type="text" class="form-control" id="apellido2" name="apellido2" placeholder="Segundo apellido">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="correo">Nombre</label>
            <input type="email" class="form-control" id="correo" name="correo" placeholder="Tu correo">
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>

    </form>

@endsection
