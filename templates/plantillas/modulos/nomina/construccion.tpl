<input type="hidden" id="nomina" name="nomina" value="{$objNomina->getId()}" />
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header"><a href="nomina" class="btn-xs btn btn-danger" title="Regresar"><i class="fa fa-arrow-left" aria-hidden="true"></i> </a> Nómina {$objNomina->getClave()}</h1>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<label>Mostrar concepto
			<select id="selCuenta" name="selCuenta" class="form-control">
				{foreach from=$cuentas item="row"}
				<option value="{$row.idCuenta}">{$row.concepto}</option>
				{/foreach}
			</select>
		</label>
		
		<button id="btnFiltro" type="button" class="btn btn-primary">Filtro avanzado</button>
		<button id="btnMasivo" class="btn btn-warning">Asignación masiva de monto</button>
		<button id="btnMasivoSDI" class="btn btn-warning">Asignación masiva de Sueldo DInt</button>
			
		</label>
	</div>
</div>

<div class="row">
	<div class="col-md-12" id="lstTrabajadores"></div>
</div>

<div class="row" id="divData">
	<div class="col-md-4">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Datos del trabajador</h3>
			</div>
			<div class="panel-body">
				<div class="col-xs-12 text-center"></div>
				<div class="input-group">
					<span class="input-group-addon"> </span>
					<input type="text" class="form-control input-sm" placeholder="Número de trabajador" title="Número de trabajador" readonly="true" disabled="true" campo="num_empleado">
				</div>
				<div class="input-group">
					<span class="input-group-addon"> </span>
					<input type="text" class="form-control input-sm" placeholder="Número personal" title="Número personal" readonly="true" disabled="true" campo="num_personal">
				</div>
				<div class="input-group">
					<span class="input-group-addon"> </span>
					<input type="text" class="form-control input-sm" placeholder="RFC" title="RFC" readonly="true" disabled="true" campo="rfc">
				</div>
				<div class="input-group">
					<span class="input-group-addon"> </span>
					<input type="text" class="form-control input-sm" placeholder="CURP" title="CURP" readonly="true" disabled="true" campo="curp">
				</div>
				<div class="input-group">
					<span class="input-group-addon"> </span>
					<input type="text" class="form-control input-sm" placeholder="Nombre" title="Nombre" readonly="true" disabled="true" campo="nombreCompleto">
				</div>
				<div class="input-group">
					<span class="input-group-addon"> </span>
					<input type="text" class="form-control input-sm" placeholder="Adscripción" title="Adscripción" readonly="true" disabled="true" campo="adscripcion">
				</div>
				<div class="input-group">
					<span class="input-group-addon"> </span>
					<input type="text" class="form-control input-sm" placeholder="Plaza" title="Plaza" readonly="true" disabled="true" campo="nombre_plaza">
				</div>
				<div class="input-group">
					<span class="input-group-addon"> </span>
					<textarea class="form-control input-sm" placeholder="Recibo" title="Recibo" readonly="true" disabled="true" campo="recibo" rows="7"></textarea>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-8">
		<div class="panel panel-danger">
			<div class="panel-heading">
				<h3 class="panel-title">Conceptos</h3>
			</div>
			<div class="panel-body" id="dvListaCuentas">
			</div>
		</div>
	</div>
</div>

{include file=$PAGE.rutaModulos|cat:"modulos/nomina/winFiltro.tpl"}