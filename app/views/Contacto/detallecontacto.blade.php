@extends('layaout.base')

@section('Titulo')
Detalle de contactos
@stop

@section('Contenido')
	@parent
	{{$dato->nombre}}
	<br>
	{{$dato->telefono}}
	<br>
	{{$dato->correo_electronico}}
	<br>
	{{$dato->direccion}}
@stop