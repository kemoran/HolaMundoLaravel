@extends('layaout.base')

@section('Titulo')
Listar contactos
@stop

@section('Contenido')
	<h1> NADA </h1>
	@foreach($datos as $dato)
		<p> {{ $dato }} </p>
	@endforeach
@stop