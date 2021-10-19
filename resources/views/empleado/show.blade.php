@extends('layouts.app')

@section('template_title')
    {{ $empleado->name ?? 'Show Empleado' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Empleado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('empleados.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $empleado->nombres }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $empleado->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Genero:</strong>
                            {{ $empleado->genero_id }}
                        </div>
                        <div class="form-group">
                            <strong>Estado Civil:</strong>
                            {{ $empleado->estado_civil_id }}
                        </div>
                        <div class="form-group">
                            <strong>Puesto Trabajo:</strong>
                            {{ $empleado->puestoTrabajo->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Dui:</strong>
                            {{ $empleado->dui }}
                        </div>
                        <div class="form-group">
                            <strong>Nit:</strong>
                            {{ $empleado->nit }}
                        </div>
                        <div class="form-group">
                            <strong>Isss:</strong>
                            {{ $empleado->isss }}
                        </div>
                        <div class="form-group">
                            <strong>Nup:</strong>
                            {{ $empleado->nup }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $empleado->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Municipio:</strong>
                            {{ $empleado->municipio->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Departamento:</strong>
                            {{ $empleado->municipio->departamento->descripcion }}
                        </div>

                        <div class="form-group">
                            <strong>Telefono Celular:</strong>
                            {{ $empleado->telefono_celular }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono Casa:</strong>
                            {{ $empleado->telefono_casa }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
