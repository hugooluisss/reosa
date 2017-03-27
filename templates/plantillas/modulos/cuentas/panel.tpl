<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Catálogo de cuentas</h1>
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
						<label for="selSAT" class="col-lg-2">SAT</label>
						<div class="col-lg-8">
							<select class="form-control" id="selSAT" name="selSAT">
								{foreach from=$sat item="row"}
									<option value="{$row.idSAT}">{$row.clave} - {$row.descripcion} ({if $row.tipo eq 'P'}Percepciones{else}Deducciones{/if})</option>
								{/foreach}
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="txtConcepto" class="col-lg-2">Concepto</label>
						<div class="col-lg-8">
							<input class="form-control" id="txtConcepto" name="txtConcepto">
						</div>
					</div>
					<div class="form-group">
						<label for="selTipo" class="col-lg-2">Tipo</label>
						<div class="col-lg-2">
							<select class="form-control" id="selTipo" name="selTipo">
								<option value="G">Gravado</option>
								<option value="E">Excento</option>
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