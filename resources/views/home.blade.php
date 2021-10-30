@extends('layouts.app')
@section('content')
    <div class="container" style="height: 100%">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Welcome</div>

                    <div class="panel-body">
                        @if (Auth::user()->hasRole('Administrador'))
                            <div>Acceso como administrador</div>
                            <div>Usuario: {{ Auth::user()->nombre }}</div>
                            
                        @elseif (Auth::user()->hasRole('Profesor'))
                            <div>Acceso como profesor</div>
                            <div>Usuario: {{ Auth::user()->nombre }}</div>
                        @else
                            <div>Acceso como alumno</div>
                            <div>Usuario: {{ Auth::user()->nombre }}</div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- @if (Auth::user()->hasRole('Administrador'))

@elseif (Auth::user()->hasRole('Profesor'))

@else

@endif --}}
