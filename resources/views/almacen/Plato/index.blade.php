@extends('layouts.admin')
@section('contenido')
	
	<div class = "row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h2>Platos 
				<a href="Plato/create"><button class="btn btn-success">+</button></a>
			</h2>
			@include('almacen.Plato.search')
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Id</th>
						<th>Nombre</th>
						<th>Valor</th>
						<th>Opciones</th>
					</thead>
					@foreach($plato as $pl)
					<tr>
						<td>{{ $pl->id}}</td>
						<td>{{ $pl->nombre}}</td>
						<td>{{ $pl->valor}}</td>
						<td>
							<a href="{{URL::action('PlatoController@edit', $pl->id)}}">
								<button class="btn btn-info">Editar</button>
							</a>
							<a href="" data-target="#modal-delete-{{$pl->id}}" data-toggle="modal">
							<button class="btn btn-danger">Eliminar</button>
							</a>
						</td>
					</tr>					
					@include('almacen.Plato.modal')
					@endforeach
				</table>
			</div>
			{{$plato->render()}}
		</div>
	</div>
@endsection