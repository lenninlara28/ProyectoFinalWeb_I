<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{$ingre->idIngrediente}}">
	
	{{Form::Open(array('action'=>array('IngredienteController@destroy',$ingre->idIngrediente),'method'=>'delete'))}}
	<div class="modal-dialog">
		<div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="close">
					<span aria-hidden=true>x</span>
				</button>
				<h3 class="modal-title">Eliminar Ingrediente</h3>
			</div>

			<div class="modal-body">
				<p>¿Esta Seguro Que Desea Eliminar?</p>
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="submit" class="btn btn-primary">Confirmar</button>
			</div>
		</div>
	</div>
	{{Form::Close()}}

</div>