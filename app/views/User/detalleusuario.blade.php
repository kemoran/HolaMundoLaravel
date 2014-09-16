@extends('layaout.base')

@section('Titulo')
Detalle de usuario
@stop

@section('Contenido')
	@parent
	{{ $dato->nombres }}
	<br>
	{{ $dato->apellidos }}
@stop