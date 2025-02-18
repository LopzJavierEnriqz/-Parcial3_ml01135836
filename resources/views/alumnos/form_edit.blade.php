<div class="row">
    <div class="col">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Primer Nombre:</strong>
                {!! Form::text('nombre0', null, ['placeholder' => 'Primer Nombre', 'class' => 'form-control']) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Segundo Nombre:</strong>
                {!! Form::text('nombre1', null, ['placeholder' => 'Segundo Nombre', 'class' => 'form-control']) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 ">
            <div class="form-group">
                <strong>Carnet:</strong>
                {!! Form::text('carnet', null, ['placeholder' => 'carnet', 'class' => 'form-control']) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {!! Form::Email('email', null, ['placeholder' => 'Email', 'class' => 'form-control']) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fecha de nacimiento:</strong>
                {!! Form::date('fech_nac', null, ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>
    <div class="col">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Primer Apellido:</strong>
                {!! Form::text('apellido0', null, ['placeholder' => 'Primer Apellido', 'class' => 'form-control']) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Segundo Apellido:</strong>
                {!! Form::text('apellido1', null, ['placeholder' => 'Segundo Apellido', 'class' => 'form-control']) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Genero:</strong>
                {!! Form::text('genero', null, ['placeholder' => 'Genero', 'class' => 'form-control']) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Telefono:</strong>
                {!! Form::text('telefono', null, ['placeholder' => 'Telefono', 'class' => 'form-control']) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 ">
            <div class="form-group text-center">
                <strong>Dirección:</strong>
                {!! Form::text('direccion', null, ['placeholder' => 'Dirección', 'class' => 'form-control']) !!}
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

        <a class="btn btn-outline-danger" href="{{ route('alumnos.index') }}"> Cancelar</a>
        <button type="submit" class="btn btn-outline-success">Editar</button>
    </div>
</div>