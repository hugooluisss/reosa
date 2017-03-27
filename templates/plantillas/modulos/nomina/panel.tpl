<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Nómina</h1>
	</div>
</div>

<ul id="panelTabs" class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#listas">Lista</a></li>
  <li><a data-toggle="tab" href="#add">Agregar o Modificar</a></li>
</ul>

<div class="tab-content">
	<div id="listas" class="tab-pane fade in active">
		<div id="dvLista">
			
		</div>
	</div>
	
	<div id="add" class="tab-pane fade">
		<form role="form" id="frmAdd" class="form-horizontal" onsubmit="javascript: return false;">
			<div class="box">
				<div class="box-body">
					<div class="form-group">
						<label for="txtClave" class="col-lg-2">Clave</label>
						<div class="col-lg-3">
							<input class="form-control" id="txtClave" name="txtClave">
						</div>
					</div>		
					<div class="form-group">
						<label for="txtInicio" class="col-lg-2">Inicio</label>
						<div class="col-lg-2">
							<input class="form-control" id="txtInicio" name="txtInicio" placeholder="Y-m-d">
						</div>
					</div>
					<div class="form-group">
						<label for="txtFin" class="col-lg-2">Fin</label>
						<div class="col-lg-2">
							<input class="form-control" id="txtFin" name="txtFin" placeholder="Y-m-d">
						</div>
					</div>
					<div class="form-group">
						<label for="txtPago" class="col-lg-2">Pago</label>
						<div class="col-lg-2">
							<input class="form-control" id="txtPago" name="txtPago" placeholder="Y-m-d">
						</div>
					</div>
					<div class="form-group">
						<label for="selEstado" class="col-lg-2">Tipo</label>
						<div class="col-lg-3">
							<select class="form-control" id="selTipo" name="selTipo">
								{foreach from=$tipos item="row"}
								<option value="{$row.idTipo}">{$row.clave} - {$row.nombre}</option>
								{/foreach}
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="selEstado" class="col-lg-2">Tipo plaza trabajador</label>
						<div class="col-lg-5">
							<select class="form-control" id="selTipoPlaza" name="selTipoPlaza" multiple="true">
								{foreach from=$plazas item="row"}
								<option value="{$row}">{$row}</option>
								{/foreach}
							</select>
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
	</div>
</div>