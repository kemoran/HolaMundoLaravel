@extends('layaout.base')

@section('Titulo')
Detalle de usuario
@stop

@section('Contenido')
	@parent
	{{ $dato->nombres }}
	<br>
	{{ $dato->apellidos }}

	{{ Form::open(array('url' => 'foo/bar')) }}
	    {{ Form::label('email', 'E-Mail Address') }}
	    {{ Form::text('username') }}
	    {{ Form::submit('Register') }}
	{{ Form::close() }}

@stop