<div class="modal fade" id="winClientes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1>Agregar cliente</h1>
			</div>
			<div class="modal-body">
				{include file=$PAGE.rutaModulos|cat:"modulos/clientes/add.tpl"}
			</div>
		</div>
	</div>
</div>