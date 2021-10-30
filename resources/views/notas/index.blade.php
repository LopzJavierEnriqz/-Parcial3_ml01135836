<head>
    <title>Notas</title>
</head>

@extends('layout')

@section('content')

    @if (Auth::user()->hasRole('Administrador'))
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="">
                    <h2 class="text-center mt-2">Registro Notas</h2>
                </div>
            </div>
            <div class="col-lg-12 margin-tb">

                <div class="pull-left">
                    <a class="btn btn-success" href="{{ route('notas.create') }}"> Añadir Registro</a>
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
                    <th>Alumno</th>
                    <th>Nota 1</th>
                    <th>Nota 2</th>
                    <th>Nota 3</th>
                    <th>Nota 4</th>
                    <th>Promedio</th>
                    <th>Parcial</th>
                    <th>Curso</th>
                    <th>Profesor</th>
                    <th>Acción</th>
                </tr>
            </thead>
            @foreach ($notas as $nota)
                <tr style="text-align: left">
                    <td>{{ ++$i }}</td>
                    <td>{{ $nota->id }}</td>
                    <td>{{ $nota->idalumno }}</td>
                    <td>{{ $nota->nota1 }}</td>
                    <td>{{ $nota->nota2 }}</td>
                    <td>{{ $nota->nota3 }}</td>
                    <td>{{ $nota->nota4 }}</td>
                    <td>{{ $nota->promedio }}</td>
                    <td>{{ $nota->parcial }}</td>
                    <td>{{ $nota->idcurso }}</td>
                    <td>{{ $nota->idprofesor }}</td>
                    <td>
                        <a class="btn btn-outline-primary" style="width:75px"
                            href="{{ route('notas.edit', $nota->id) }}">Editar</a>
                        {!! Form::open(['method' => 'DELETE', 'route' => ['notas.destroy', $nota->id], 'style' => 'display:inline']) !!}
                        {!! Form::submit('Eliminar', ['class' => 'btn btn-outline-danger', 'style' => 'width:75px']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </table>
    @elseif (Auth::user()->hasRole('Profesor'))
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="">
                <h2 class="text-center mt-2">Registro Notas</h2>
            </div>
        </div>
        <div class="col-lg-12 margin-tb">

            <div class="pull-left">
                <a class="btn btn-success" href="{{ route('notas.create') }}"> Añadir Registro</a>
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
                    <th>Alumno</th>
                    <th>Nota 1</th>
                    <th>Nota 2</th>
                    <th>Nota 3</th>
                    <th>Nota 4</th>
                    <th>Promedio</th>
                    <th>Parcial</th>
                    <th>Curso</th>
                    <th>Profesor</th>
                    <th>Acción</th>
                </tr>
            </thead>
            @foreach ($notas as $nota)
                <tr style="text-align: left">
                    <td>{{ ++$i }}</td>
                    <td>{{ $nota->id }}</td>
                    <td>{{ $nota->idalumno }}</td>
                    <td>{{ $nota->nota1 }}</td>
                    <td>{{ $nota->nota2 }}</td>
                    <td>{{ $nota->nota3 }}</td>
                    <td>{{ $nota->nota4 }}</td>
                    <td>{{ $nota->promedio }}</td>
                    <td>{{ $nota->parcial }}</td>
                    <td>{{ $nota->idcurso }}</td>
                    <td>{{ $nota->idprofesor }}</td>
                    <td>
                        <a class="btn btn-outline-primary" style="width:75px"
                            href="{{ route('notas.edit', $nota->id) }}">Editar</a>
                        {!! Form::open(['method' => 'DELETE', 'route' => ['notas.destroy', $nota->id], 'style' => 'display:inline']) !!}
                        {!! Form::submit('Eliminar', ['class' => 'btn btn-outline-danger', 'style' => 'width:75px']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </table>
    @else
        <div class="row">
            <div class="col-lg-12 margin-tb mt-2">
                <div class="">
                    <h2 class="text-center mt-2">Registro Notas</h2>
                </div>
            </div>
            <div class="col-lg-12 margin-tb">

                <div class="pull-left">
                    <a class="btn btn-success" href="{{ route('notas.create') }}"> Añadir Registro</a>
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
                    <th>Alumno</th>
                    <th>Nota 1</th>
                    <th>Nota 2</th>
                    <th>Nota 3</th>
                    <th>Nota 4</th>
                    <th>Promedio</th>
                    <th>Parcial</th>
                    <th>Curso</th>
                </tr>
            </thead>
            @foreach ($notas as $nota)
                <tr style="text-align: left">
                    <td>{{ ++$i }}</td>
                    <td>{{ $nota->id }}</td>
                    <td>{{ $nota->idalumno }}</td>
                    <td>{{ $nota->nota1 }}</td>
                    <td>{{ $nota->nota2 }}</td>
                    <td>{{ $nota->nota3 }}</td>
                    <td>{{ $nota->nota4 }}</td>
                    <td>{{ $nota->promedio }}</td>
                    <td>{{ $nota->parcial }}</td>
                    <td>{{ $nota->idcurso }}</td>
                </tr>
            @endforeach
        </table>
    @endif




    {!! $notas->links() !!}
@endsection
