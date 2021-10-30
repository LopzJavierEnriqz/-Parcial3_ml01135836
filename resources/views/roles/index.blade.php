<head>
    <title>Roles</title>
</head>
@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb mt-2">
            <div class="text-center">
                <h2 class="text-center mt-2">Registro Roles</h2>
            </div>
        </div>
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <a class="btn btn-success" href="{{ route('roles.create') }}"> Añadir Roles</a>
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
                <th>Descripción</th>
                <th>Acción</th>
            </tr>
        </thead>
        @foreach ($roles as $rol)
            <tr style="text-align: center">
                <td>{{ ++$i }}</td>
                <td>{{ $rol->id }}</td>
                <td>{{ $rol->nombre }}</td>
                <td>{{ $rol->descripcion }}</td>
                <td>
                    <a class="btn btn-outline-primary" style="width:75px"
                        href="{{ route('roles.edit', $rol->id) }}">Editar</a>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $rol->id], 'style' => 'display:inline']) !!}
                    {!! Form::submit('Eliminar', ['class' => 'btn btn-outline-danger', 'style' => 'width:75px']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>


    {!! $roles->links() !!}
@endsection



