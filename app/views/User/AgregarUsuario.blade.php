@extends('layaout.base')

@section('Titulo')
Agregar usuario
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
		<div class="box box-primary">
			<!-- Cabecera del box -->
			<div class="box-header">
				<h3 class="box-title"> Formulario para agregar un usuario </h3>
			</div>
			{{ Form::open(array('url' => 'Usuario/Agregar/POST', 'method' => 'post', 'role' =>  'form' )) }}
				<div class="box-body">
					<div class="form-group">
						{{ Form::label('txtNombres', 'Nombres') }}
						{{ Form::text('txtNombres', '', array('class' => 'form-control')) }}
						<span class="text-red"> {{ $errors->first('txtNombres') }} </span>
					</div>

					<div class="form-group">
						{{ Form::label('txtApellido', 'Apellidos') }}
						{{ Form::text('txtApellidos', '', array('class' => 'form-control')) }}
						<span class="text-red"> {{ $errors->first('txtApellidos') }} </span>
					</div>

					<div class="form-group">
						{{ Form::label('txtDUI', 'Documento Único de Identidad') }}
						{{ Form::text('txtDUI', '', array('class' => 'form-control')) }}
						<span class="text-red"> {{ $errors->first('txtDUI') }} </span>
					</div>

					<div class="form-group">
						{{ Form::label('txtContrasenha', 'Contraseña') }}
						{{ Form::password('txtContrasenha', array('class' => 'form-control')) }}
						<span class="text-red"> {{ $errors->first('txtContrasenha') }} </span>
					</div>
				</div>
				<div class="box-footer">
					{{ Form::submit('Agregar', array('class' => 'btn btn-primary btn-sm')) }}
				</div>
			{{ Form::close() }}
			<div class="box-footer clearfix">
			</div>
		</div>
	</div>
</div>
@stop