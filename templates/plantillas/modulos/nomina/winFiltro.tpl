<div class="modal fade" id="winFiltro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1>Filtro de selección</h1>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group">
						<label for="selAccion">Acción</label>
						<select id="selAccion" name="selAccion" class="form-control">
							<option value="S">Seleccionar</option>
							<option value="Q">Quitar selección</option>
						</select>
					</div>
					<hr />
					<div class="text-center text-success">
						A los trabajadores con las siguientes características
					</div>
					<div class="form-group">
						<label for="selSexo">Sexo</label>
						<select id="selSexo" name="selSexo" class="form-control">
							<option value="A">Hombre y Mujer</option>
							<option value="M">Hombre</option>
							<option value="F">Mujer</option>
						</select>
					</div>
					<div class="form-group">
						<label for="selPlaza">Plaza</label>
						<select id="selPlaza" name="selPlaza" class="form-control">
							<option value="--">----- Cualquiera -----</option>
							{foreach from=$plazas item="row"}
							<option value="{$row}">{$row}</option>
							{/foreach}
						</select>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" id="btnEjecutar">Ejecutar</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div>