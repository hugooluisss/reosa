<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Ordenes</h1>
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
						<label for="txtFecha" class="col-sm-2">Fecha</label>
						<div class="col-sm-2">
							<input class="form-control" id="txtFecha" name="txtFecha">
						</div>
					</div>
					<div class="form-group">
						<label for="selCliente" class="col-sm-2">Cliente</label>
						<div class="col-sm-4">
							<select id="selCliente" name="selCliente" class="form-control">
							</select>
						</div>
						<label for="selEquipo" class="col-sm-2">Equipo</label>
						<div class="col-sm-4">
							<select id="selEquipo" name="idEquipo" class="form-control">
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="txtSolicitante" class="col-sm-2">Persona solicitante del servicio</label>
						<div class="col-sm-10">
							<input class="form-control" id="txtSolicitante" name="txtSolicitante">
						</div>
					</div>
					<div class="form-group">
						<label for="txtFallas" class="col-sm-2">Fallas encontradas</label>
						<div class="col-sm-4">
							<textarea class="form-control" rows="5" id="txtFallas" name="txtFallas"></textarea>
						</div>
						<label for="txtServicio" class="col-sm-2">Servicio realizado</label>
						<div class="col-sm-4">
							<textarea class="form-control" rows="5" id="txtServicio" name="txtServicio"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="txtMateriales" class="col-sm-2">Materiales utilizados</label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="5" id="txtMateriales" name="txtMateriales"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="txtComentarios" class="col-sm-2">Comentarios</label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="5" id="txtComentarios" name="txtComentarios"></textarea>
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