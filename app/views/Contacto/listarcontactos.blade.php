@extends('layaout.base')

@section('Titulo')
Listar contactos
@stop

@section('Contenido')
<aside>
	<section>
		<h1>
			Contactos del usuario
			<small> {{ $usuario->nombres }} {{ $usuario->apellidos }} </small>
		</h1>
	</section>
</aside>
<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<!-- Cabecera del box -->
			<div class="box-header">
				<h3 class="box-title"> Listado de contactos </h3>
				<div class="box-tools">
					<div class="input-group">
						<input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Buscar"/>
						<div class="input-group-btn">
							<button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
			<!-- Cuerpo del box -->
			<div class="box-body table-responsive no-padding">
				<table class="table table-hover">
					<!-- Encabezado de tabla -->
					<tr>
						<th> Nombre </th>
						<th> Tel&eacute;fono </th>
						<th> Correo </th>
						<th> Direcci&oacute;n </th>
						<th> Mantenimiento </th>
					</tr>
					@foreach($datos as $dato)
					<!-- Contenido de tabla -->
					<tr>
						<td> {{ $dato->nombre }} </td>
						<td> {{ $dato->telefono }} </td>
						<td> {{ $dato->correo_electronico }} </td>
						<td> {{ $dato->direccion }} </td>
						<!-- Botones de mantenimiento -->
						<td>
							<a href="/usuario/{{ $dato->id }}" class="btn btn-warning btn-sm"> Editar </a>
							<a href="/usuario/{{ $dato->id }}" class="btn btn-danger btn-sm"> Eliminar </a>
						</td>
					</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>
</div>
@stop