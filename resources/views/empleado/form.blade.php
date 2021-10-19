<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('nombres') }}
            {{ Form::text('nombres', $empleado->nombres, ['class' => 'form-control' . ($errors->has('nombres') ? ' is-invalid' : ''), 'placeholder' => 'Nombres']) }}
            {!! $errors->first('nombres', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellidos') }}
            {{ Form::text('apellidos', $empleado->apellidos, ['class' => 'form-control' . ($errors->has('apellidos') ? ' is-invalid' : ''), 'placeholder' => 'Apellidos']) }}
            {!! $errors->first('apellidos', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('genero') }}
            {{ Form::select('genero_id',$genero, $empleado->genero_id, ['class' => 'form-control' . ($errors->has('genero_id') ? ' is-invalid' : ''), 'placeholder' => 'Genero Id']) }}
            {!! $errors->first('genero_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado civil') }}
            {{ Form::select('estado_civil_id',$estadoCivil, $empleado->estado_civil_id, ['class' => 'form-control' . ($errors->has('estado_civil_id') ? ' is-invalid' : ''), 'placeholder' => 'Estado Civil Id']) }}
            {!! $errors->first('estado_civil_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('puesto de trabajo') }}
            {{ Form::select('puesto_trabajo_id',$puestos, $empleado->puesto_trabajo_id, ['class' => 'form-control' . ($errors->has('puesto_trabajo_id') ? ' is-invalid' : ''), 'placeholder' => 'Puesto Trabajo Id']) }}
            {!! $errors->first('puesto_trabajo_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dui') }}
            {{ Form::text('dui', $empleado->dui, ['class' => 'form-control' . ($errors->has('dui') ? ' is-invalid' : ''), 'placeholder' => 'Dui']) }}
            {!! $errors->first('dui', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nit') }}
            {{ Form::text('nit', $empleado->nit, ['class' => 'form-control' . ($errors->has('nit') ? ' is-invalid' : ''), 'placeholder' => 'Nit']) }}
            {!! $errors->first('nit', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('isss') }}
            {{ Form::text('isss', $empleado->isss, ['class' => 'form-control' . ($errors->has('isss') ? ' is-invalid' : ''), 'placeholder' => 'Isss']) }}
            {!! $errors->first('isss', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nup') }}
            {{ Form::text('nup', $empleado->nup, ['class' => 'form-control' . ($errors->has('nup') ? ' is-invalid' : ''), 'placeholder' => 'Nup']) }}
            {!! $errors->first('nup', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $empleado->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('municipio') }}
            {{ Form::select('municipio_id',$municipio, $empleado->municipio_id, ['class' => 'form-control' . ($errors->has('municipio_id') ? ' is-invalid' : ''), 'placeholder' => 'Departamento Id']) }}
            {!! $errors->first('municipio_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefono de celular') }}
            {{ Form::text('telefono_celular', $empleado->telefono_celular, ['class' => 'form-control' . ($errors->has('telefono_celular') ? ' is-invalid' : ''), 'placeholder' => 'Telefono Celular']) }}
            {!! $errors->first('telefono_celular', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefono de casa') }}
            {{ Form::text('telefono_casa', $empleado->telefono_casa, ['class' => 'form-control' . ($errors->has('telefono_casa') ? ' is-invalid' : ''), 'placeholder' => 'Telefono Casa']) }}
            {!! $errors->first('telefono_casa', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>
