@extends('layouts.admin')
@section('contenido')
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		@foreach($plato as $pl)
		<h2>{{$pl}}</h2>
		<span class="input-group-btn">
		<a href=""><button class="btn btn-success">+</button></a>
		</span>
		@endforeach
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Ingredientes</th>
						<th>Cantidad</th>
						<th>Opciones</th>
					</thead>
					@foreach($ingredientes as $cantidad=>$ingre)
					<tr>
						@if($ingre == $ingredientesnombres["$ingre"])
							<td>{{$ingredientesnombres}}</td>						
							<td>{{$cantidad}}</td>
							<td><a><button class="btn btn-danger">Eliminar Ingrediente</button></a></td>	
						@endif					
					</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>
</div>
@endsection