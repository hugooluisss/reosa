<form role="form" id="frmAdd" class="form-horizontal" onsubmit="javascript: return false;">
	<div class="box">
		<div class="box-body">
			<div class="form-group">
				<label for="txtNombre" class="col-lg-2">Nombre completo</label>
				<div class="col-lg-8">
					<input class="form-control" id="txtNombre" name="txtNombre">
				</div>
				
			</div>
			<div class="form-group">
				<label for="txtDireccion" class="col-lg-2">Dirección</label>
				<div class="col-lg-3">
					<input class="form-control" id="txtDireccion" name="txtDireccion" type="text">
				</div>
			</div>
			<div class="form-group">
				<label for="txtCiudad" class="col-lg-2">Ciudad</label>
				<div class="col-lg-3">
					<input class="form-control" id="txtCiudad" name="txtCiudad" type="text">
				</div>
			</div>
			<div class="form-group">
				<label for="txtColonia" class="col-lg-2">Colonia</label>
				<div class="col-lg-3">
					<input class="form-control" id="txtColonia" name="txtColonia" type="text">
				</div>
			</div>
		</div>
		<div class="box-footer">
			<button type="reset" id="btnReset" class="btn btn-default">Cancelar</button>
			<button type="submit" class="btn btn-info pull-right">Guardar</button>
			<input type="hidden" id="id"/>
		</div>
	</div>
</form>