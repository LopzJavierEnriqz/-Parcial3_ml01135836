<head>
    <title>Cursos</title>
</head>

@extends('layouts.app')


@section('content')
    @if (Auth::user()->hasRole('Administrador'))
        <div class="row">
            <div class="col-lg-12 margin-tb mt-2">
                <div class="text-center">
                    <h2 class="text-center mt-2">Registro Cursos</h2>
                </div>
            </div>
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <a class="btn btn-success" href="{{ route('cursos.create') }}"> Añadir Registro</a>
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
                    <th>Profesor</th>
                    <th>Ciclo</th>
                    <th>Año</th>
                    <th>Acción</th>
                </tr>
            </thead>
            @foreach ($cursos as $curso)
                <tr style="text-align: center">
                    <td>{{ ++$i }}</td>
                    <td>{{ $curso->id }}</td>
                    <td>{{ $curso->nombre }}</td>
                    <td>{{ $curso->idprofesor }}</td>
                    <td>{{ $curso->ciclo }}</td>
                    <td>{{ $curso->año }}</td>
                    <td>
                        <a class="btn btn-outline-primary" style="width:75px"
                            href="{{ route('cursos.edit', $curso->id) }}">Editar</a>
                        {!! Form::open(['method' => 'DELETE', 'route' => ['cursos.destroy', $curso->id], 'style' => 'display:inline']) !!}
                        {!! Form::submit('Eliminar', ['class' => 'btn btn-outline-danger', 'style' => 'width:75px']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </table>

    @elseif (Auth::user()->hasRole('Profesor'))
        <div class="row">
            <div class="col-lg-12 margin-tb mt-2">
                <div class="text-center">
                    <h2 class="text-center mt-2">Registro Cursos</h2>
                </div>
            </div>
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <a class="btn btn-success" href="{{ route('cursos.create') }}"> Añadir Registro</a>
                </div>
            </div>
        </div>


        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif


        <table class="table table-hover table-striped mt-2 ">
            <thead class="thead-dark " style="text-align: center">
                <tr>
                    <th>No</th>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Profesor</th>
                    <th>Ciclo</th>
                    <th>Año</th>
                </tr>
            </thead>
            @foreach ($cursos as $curso)
                <tr style="text-align: center">
                    <td>{{ ++$i }}</td>
                    <td>{{ $curso->id }}</td>
                    <td>{{ $curso->nombre }}</td>
                    <td>{{ $curso->idprofesor }}</td>
                    <td>{{ $curso->ciclo }}</td>
                    <td>{{ $curso->año }}</td>
                </tr>
            @endforeach
        </table>

    @else
        <div class="row">
            <div class="col-lg-12 margin-tb mt-2">
                <div class="text-center">
                    <h2 class="text-center mt-2">Registro Curso</h2>
                </div>
            </div>
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <a class="btn btn-success" href="{{ route('cursos.create') }}"> Añadir Curso</a>
                </div>
            </div>
        </div>


        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif


        <table class="table table-hover table-striped mt-2 ">
            <thead class="thead-dark " >
                <tr style="text-align: center">
                    <th>No</th>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Profesor</th>
                    <th>Ciclo</th>
                    <th>Año</th>
                </tr>
            </thead>
            @foreach ($cursos as $curso)
                <tr style="text-align: center">
                    <td>{{ ++$i }}</td>
                    <td>{{ $curso->id }}</td>
                    <td>{{ $curso->nombre }}</td>
                    <td>{{ $curso->idprofesor }}</td>
                    <td>{{ $curso->ciclo }}</td>
                    <td>{{ $curso->año }}</td>
                </tr>
            @endforeach
        </table>

    @endif


    {!! $cursos->links() !!}
@endsection
