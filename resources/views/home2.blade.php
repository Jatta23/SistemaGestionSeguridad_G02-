<?php
		session_start();
        if (!isset($_SESSION['tiempo'])) {
            $_SESSION['tiempo']=time();
        }
        else if (time() - $_SESSION['tiempo'] > 10) {
            session_destroy();
            /* Aquí redireccionas a la url especifica */
            header("Location: logout");
            //return '/resources/views/logout';
            die();
        }
        $_SESSION['tiempo']=time(); //Si hay actividad seteamos el valor al tiempo actual
	?>

@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="display-4 text-primary" >Empresa</h1>
            <p class="lead text-secondary">Empresa de seguridad</p>
            <p class="lead text-secondary">Clasificacion de empresa:Grande</p>
            <p class="lead text-secondary">Tipo administracion: Privada</p>
            <p class="lead text-secondary">Tipo de propiedad: Privada</p>
            <p class="lead text-secondary">Direccion: San Salvador, colonia medica</p>
            <a class="btn btn-lg btn-primary" href="{{ route('departamento-empresas.index') }}">Visitar Departamentos empresas</a>
        </div>
        <div class="col-6">
            <img class="img-fluid" src="/img/Home.svg" alt="Empresa logo">
        </div>
    </div>
</div>

@endsection
