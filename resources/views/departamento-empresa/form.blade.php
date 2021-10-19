<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $departamentoEmpresa->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numero de empleados') }}
            {{ Form::text('numero_empleados', $departamentoEmpresa->numero_empleados, ['class' => 'form-control' . ($errors->has('numero_empleados') ? ' is-invalid' : ''), 'placeholder' => 'Numero Empleados']) }}
            {!! $errors->first('numero_empleados', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('empresa') }}
            {{ Form::select('empresa_id',$empresa, $departamentoEmpresa->empresa_id, ['class' => 'form-control' . ($errors->has('empresa_id') ? ' is-invalid' : ''), 'placeholder' => 'Empresa Id']) }}
            {!! $errors->first('empresa_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
