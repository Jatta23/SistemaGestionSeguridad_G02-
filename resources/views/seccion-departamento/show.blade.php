@extends('layouts.app')

@section('template_title')
    {{ $seccionDepartamento->name ?? 'Show Seccion Departamento' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Seccion Departamento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('seccion-departamentos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $seccionDepartamento->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Departamento Empresa Id:</strong>
                            {{ $seccionDepartamento->departamento_empresa_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
