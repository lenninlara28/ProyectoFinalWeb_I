@extends('layouts.admin')
@section('contenido')
	
	<div class = "row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Ingredientes 
				<a href="Ingrediente/create"><button>Agregar</button></a>
			</h3>
			@include('almacen.Ingrediente.search')
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Id</th>
						<th>Nombre</th>
						<th>Provedor</th>
						<th>Opciones</th>
					</thead>
					@foreach($ingredientes as $ingre)
					<tr>
						<td>{{ $ingre->id}}</td>
						<td>{{ $ingre->nombre}}</td>
						<td>{{ $ingre->proveedor}}</td>
						<td>
							<button class="btn btn-info">Editar</button>
							<button class="btn btn-danger">Eliminar</button>
						</td>
					</tr>
					@endforeach
				</table>
			</div>
			{{$ingredientes->render}}
		</div>
	</div>

@endsection