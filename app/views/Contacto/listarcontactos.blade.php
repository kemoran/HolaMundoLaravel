@extends('layaout.base')

@section('Titulo')
Listar contactos
@stop

@section('Contenido')
	@foreach($datos as $dato)
		<p> {{ $dato }} </p>
	@endforeach
@stop