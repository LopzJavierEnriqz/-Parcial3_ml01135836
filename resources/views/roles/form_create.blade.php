<div class="row">
    <div class="col">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                {!! Form::text('nombre', null, ['placeholder' => 'Nombre', 'class' => 'form-control']) !!}
            </div>
        </div>
    </div>
    <div class="col">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descripción:</strong>
                {!! Form::text('descripcion', null, ['placeholder' => 'Año', 'class' => 'form-control']) !!}
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        
        <a class="btn btn-danger" href="{{ route('roles.index') }}"> Cancelar</a>
        <button type="submit" class="btn btn-primary">Agregar</button>
    </div>
</div>