<head>
    <title>Alumnos</title>
</head>

@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb mt-2">
            <div class="text-center">
                <h2 class="text-center mt-2">Registro Alumnado</h2>
            </div>
        </div>

        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <a class="btn btn-success" href="{{ route('alumnos.create') }}">Añadir alumnno</a>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-hover table-striped table-responsive mt-2 ">
        <thead class="thead-dark text-center">
            <tr>
                <th>No</th>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Carnet</th>
                <th>Dirección</th>
                <th>Genero</th>
                <th>Telefono</th>
                <th>Email</th>
                <th style="width:180px; text-align: center">Acción</th>
            </tr>
        </thead>
        @foreach ($alumnos as $alumno)
            <tr style="text-align: left">
                <td>{{ ++$i }}</td>
                <td>{{ $alumno->id }}</td>
                <td>{{ $alumno->nombre0 }}</td>
                <td>{{ $alumno->apellido0 }}</td>
                <td>{{ $alumno->carnet }}</td>
                <td>{{ $alumno->direccion }}</td>
                <td>{{ $alumno->genero }}</td>
                <td>{{ $alumno->telefono }}</td>
                <td>{{ $alumno->email }}</td>
                <td>
                    <a class="btn btn-outline-primary" style="width:75px; margin-bottom: 5px" href="{{ route('alumnos.edit', $alumno->id) }}">Editar</a>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['alumnos.destroy', $alumno->id], 'style' => 'display:inline']) !!}
                    {!! Form::submit('Eliminar', ['class' => 'btn btn-outline-danger','style' => 'width:75px; margin-bottom: 5px']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
<div class="row">
    <div class="col">
        
    {!! $alumnos->links() !!}
    </div>
    <div class="col "style="text-align: rigth">
        <a class="btn btn-danger" style="width:75px; margin-bottom: 5px" href="·">PDF</a>
    </div>
</div>

@endsection
