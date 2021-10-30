@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="text-center mt-2">Editar Alumno</h2>
            </div>
            
        </div>
    </div>


    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    {!! Form::model($alumno, ['method' => 'PATCH','route' => ['alumnos.update', $alumno->id]]) !!}
        @include('alumnos.form_edit')
    {!! Form::close() !!}


@endsection