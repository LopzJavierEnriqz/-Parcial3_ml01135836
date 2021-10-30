<div class="row">
    <div class="col">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alumno:</strong>
                {!! Form::text('alumno', null, ['placeholder' => '', 'class' => 'form-control text-center']) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nota 1:</strong>
                {!! Form::number('nota1', null, ['placeholder' => '', 'class' => 'form-control' , 'min' => '1','max' => '10' ]) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nota 2:</strong>
                {!! Form::number('nota2', null, ['placeholder' => '', 'class' => 'form-control' , 'min' => '1','max' => '10' ]) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nota 3:</strong>
                {!! Form::number('nota3', null, ['placeholder' => '', 'class' => 'form-control' , 'min' => '1','max' => '10' ]) !!}
            </div>
        </div>
    </div>
    <div class="col">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nota 4:</strong>
                {!! Form::number('nota4', null, ['placeholder' => '', 'class' => 'form-control' , 'min' => '1','max' => '10' ]) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Promedio:</strong>
                {!! Form::number('promedio', null, ['placeholder' => '', 'class' => 'form-control' , 'min' => '1','max' => '10' ]) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Parcial:</strong>
                {!! Form::number('parcial', null, ['placeholder' => '', 'class' => 'form-control' , 'min' => '1','max' => '10' ]) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Curso:</strong>
                {!! Form::number('idcurso', null, ['placeholder' => '', 'class' => 'form-control' , 'min' => '1','max' => '10' ]) !!}
            </div>
        </div>
        
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <a class="btn btn-danger" href="{{ route('notas.index') }}"> Cancelar</a>
        <button type="submit" class="btn btn-primary">Editar</button>
    </div>
</div>
