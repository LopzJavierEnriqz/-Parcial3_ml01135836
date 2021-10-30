<div class="row">
    <div class="col">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                {!! Form::text('nombre', null, ['placeholder' => 'Nombre', 'class' => 'form-control']) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Año:</strong>
                {!! Form::text('año', null, ['placeholder' => 'Año', 'class' => 'form-control']) !!}
            </div>
        </div>
        
    </div>
    <div class="col">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Ciclo</strong>
                {!! Form::text('ciclo', null, ['placeholder' => 'Ciclo','class' => 'form-control']) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Profesor:</strong>
                {!! Form::text('idprofesor', null, ['placeholder' => 'Profesor', 'class' => 'form-control']) !!}
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        
        <a class="btn btn-danger" href="{{ route('cursos.index') }}"> Cancelar</a>
        <button type="submit" class="btn btn-primary">Agregar</button>
    </div>
</div>