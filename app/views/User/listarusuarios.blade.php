@extends('layaout.base')

@section('Titulo')
Listado de usuarios
@stop

@section('Contenido')
<aside>
	<section>
		<h1>
			Usuarios del sistema
		</h1>
	</section>
</aside>
<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<!-- Cabecera del box -->
			<div class="box-header">
				<h3 class="box-title"> Listado de usuarios </h3>
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
				<div class="dataTables_wrapper form-inline" role="grid">
				<table class="table table-hover table-bordered dataTable" id="tblUsuarios">
					<tbody>
						<!-- Encabezado de tabla -->
						<tr>
							<th> Nombres </th>
							<th> Apellidos </th>
							<th> DUI </th>
							<th> Mantenimiento </th>
						</tr>
						@foreach($datos as $dato)
						<!-- Contenido de tabla -->
						<tr>
							<td> {{ $dato->nombres }} </td>
							<td> {{ $dato->apellidos }} </td>
							<td> {{ $dato->dui }} </td>
							<!-- Botones de mantenimiento -->
							<td>
								{{ HTML::linkRoute('UsuarioEditar', 'Editar', array($dato->id), array('class' => 'btn btn-warning btn-sm')) }}
								{{ Form::open(array('url' => 'Usuario/Eliminar/'.$dato->id, 'method' => 'post', 'role' =>  'form', 'style' => 'display: inline;' )) }}
									{{ Form::hidden('hdnID', $dato->id) }}
									{{ Form::submit('Eliminar', array('class' => 'btn btn-danger btn-sm')) }}
								{{ Form::close() }}
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				</div>
			</div>
			<div class="box-footer clearfix">
				{{ HTML::linkRoute('UsuarioAgregar', 'Agregar', array(), array('class' => 'btn btn-primary btn-sm')) }}
			</div>
		</div>
	</div>
</div>
@stop

@section('JS')
<script type="text/javascript">
	$(function(){
		$("#tblUsuarios").dataTable();
	});
</script>
@stop