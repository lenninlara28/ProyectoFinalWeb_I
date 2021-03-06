@extends('layouts.admin')
@section('contenido')
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<h2>Editar Ingrediente: {{$ingrediente->nombre}}</h2>
		@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
		@endif

		{!! Form::model($ingrediente,['method'=>'PATCH','route'=>['Ingrediente.update',$ingrediente->idIngrediente]]) !!}
		{{Form::token()}}
		<div class="form-group">
			<input type="text" name="nombre" class="form-control" value="{{$ingrediente->nombre}}" placeholder="Nombre">
		</div>

		<div class="form-group">
			<input type="text" name="proveedor" class="form-control" value="{{$ingrediente->proveedor}}" placeholder="Proveedor">
		</div>

		<div class="form-group">
			<button class="btn btn-primary" type="submit">Guardar</button>
			<button class="btn btn-danger" type="reset">Cancelar</button>
		</div>
		{!!Form::close()!!}
	</div>
</div>
@endsection