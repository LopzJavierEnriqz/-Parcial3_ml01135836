<head>
    <title>Profesores</title>
</head>

@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb mt-2">
            <div class="text-center">
                <h2 class="text-center mt-2">Registro Profesorado</h2>
            </div>
        </div>
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <a class="btn btn-success" href="{{ route('profesores.create') }}"> Añadir Profesor</a>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-hover table-striped mt-2 ">
        <thead class="thead-dark text-center">
            <tr>
                <th>No</th>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Carnet</th>
                <th>Dui</th>
                <th>Genero</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Acción</th>
            </tr>
        </thead>
        @foreach ($profesores as $profesor)
            <tr style="text-align: left">
                <td>{{ ++$i }}</td>
                <td>{{ $profesor->id }}</td>
                <td>{{ $profesor->nombre0 }}</td>
                <td>{{ $profesor->apellido0 }}</td>
                <td>{{ $profesor->carnet }}</td>
                <td>{{ $profesor->dui }}</td>
                <td>{{ $profesor->genero }}</td>
                <td>{{ $profesor->telefono }}</td>
                <td>{{ $profesor->email }}</td>
                <td>
                    <a class="btn btn-outline-primary" style="width:75px"
                        href="{{ route('profesores.edit', $profesor->id) }}">Editar</a>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['profesores.destroy', $profesor->id], 'style' => 'display:inline']) !!}
                    {!! Form::submit('Eliminar', ['class' => 'btn btn-outline-danger', 'style' => 'width:75px']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>


    {!! $profesores->links() !!}
@endsection
