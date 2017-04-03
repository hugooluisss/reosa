<form role="form" id="frmAddEquipos" class="form-horizontal" onsubmit="javascript: return false;">
	<div class="form-group">
		<label for="txtCodigo" class="col-lg-2">Código</label>
		<div class="col-lg-10">
			<input class="form-control" id="txtCodigo" name="txtCodigo">
		</div>
		
	</div>
	<div class="form-group">
		<label for="txtTipo" class="col-lg-2">Tipo</label>
		<div class="col-lg-10">
			<input class="form-control" id="txtTipo" name="txtTipo" type="text">
		</div>
	</div>
	<div class="form-group">
		<label for="txtArea" class="col-lg-2">Área</label>
		<div class="col-lg-10">
			<input class="form-control" id="txtArea" name="txtArea" type="text">
		</div>
	</div>
	<div class="form-group">
		<label for="txtMarca" class="col-lg-2">Marca</label>
		<div class="col-lg-10">
			<input class="form-control" id="txtMarca" name="txtMarca" type="text">
		</div>
	</div>
	<div class="form-group">
		<label for="txtModelo" class="col-lg-2">Modelo</label>
		<div class="col-lg-10">
			<input class="form-control" id="txtModelo" name="txtModelo" type="text">
		</div>
	</div>
	<div class="form-group">
		<label for="txtCapacidad" class="col-lg-2">Capacidad</label>
		<div class="col-lg-10">
			<input class="form-control" id="txtCapacidad" name="txtCapacidad" type="text">
		</div>
	</div>
	<button type="reset" id="btnReset" class="btn btn-default">Cancelar</button>
	<button type="submit" class="btn btn-info pull-right">Guardar</button>
	<input type="hidden" id="idEquipo"/>
	<input type="hidden" id="idCliente"/>
</form>