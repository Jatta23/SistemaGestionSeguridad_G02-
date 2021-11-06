<?php
	session_start();
	session_destroy();
?>
@extends('layouts.app')

@section('content')

<div>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Cierre de sesión automático por inactividad</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<center><h3>Su sesión ha excedido el tiempo de un minuto. Vuelva a iniciar sesión.</h3></center>
		<a href="{{ route('2fa.index') }}">Login</a>
	</div>
</div>

@endsection