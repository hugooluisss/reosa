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
					<div class="form-group hidden">
						<label for="txtFecha" class="col-sm-2">Fecha</label>
						<div class="col-sm-2">
							<input class="form-control" id="txtFecha" name="txtFecha">
						</div>
					</div>
					<div class="form-group">
						<label for="txtFolio" class="col-sm-2">Folio</label>
						<div class="col-sm-2">
							<input class="form-control" id="txtFolio" name="txtFolio" disabled="true" readonly="true">
						</div>
					</div>
					<div class="form-group">
						<label for="selLimpiezaCarcasa" class="col-sm-2">Estado</label>
						<div class="col-sm-4">
							<select id="selEstado" name="selEstado" class="form-control">
								{foreach from=$estados item="row"}
									<option value="{$row.idEstado}">{$row.nombre}</option>
								{/foreach}
							</select>
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
							<select id="selEquipo" name="selEquipo" class="form-control">
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 text-center"><h3 class="text-primary">Reporte técnico del servicio</h3></div>
					</div>
					<div class="form-group">
						<label for="txtSolicitante" class="col-sm-2">Persona solicitante del servicio</label>
						<div class="col-sm-10">
							<input class="form-control" id="txtSolicitante" name="txtSolicitante">
						</div>
					</div>
					<div class="form-group">
						<label for="selCliente" class="col-sm-2">Asignado</label>
						<div class="col-sm-10">
							<select id="selAsignado" name="selAsignado" class="form-control">
								<option value="">Sin asignar</option>
								{foreach from=$vendedores item="row"}
									<option value="{$row.nombre}">{$row.nombre}</option>
								{/foreach}
							</select>
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
					
					
					
					
					
					<hr />
					<div class="row">
						<div class="col-md-12 text-center"><h3 class="text-primary">Mantenimiento realizado</h3></div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="selLimpiezaCarcasa" class="col-sm-6">Limpieza de carcasa</label>
								<div class="col-sm-6">
									<select id="selLimpiezaCarcasa" name="selLimpiezaCarcasa" class="form-control">
										<option value="0">No</option>
										<option value="1">Si</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="selLimpiezaPartesElectricas" class="col-sm-6">Limpieza partes eléctricas</label>
								<div class="col-sm-6">
									<select id="selLimpiezaPartesElectricas" name="selLimpiezaPartesElectricas" class="form-control">
										<option value="0">No</option>
										<option value="1">Si</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="selLimpiezaSerpentinCondensador" class="col-sm-6">Limpieza serpentín condensador</label>
								<div class="col-sm-6">
									<select id="selLimpiezaSerpentinCondensador" name="selLimpiezaSerpentinCondensador" class="form-control">
										<option value="0">No</option>
										<option value="1">Si</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="selLimpiezaSerpentinEvaporador" class="col-sm-6">Limpieza serpentín evaporador</label>
								<div class="col-sm-6">
									<select id="selLimpiezaSerpentinEvaporador" name="selLimpiezaSerpentinEvaporador" class="form-control">
										<option value="0">No</option>
										<option value="1">Si</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="selChequeoRefrigerante" class="col-sm-6">Chequeo carga de refrigerante</label>
								<div class="col-sm-6">
									<select id="selChequeoCargaRefrigerante" name="selChequeoCargaRefrigerante" class="form-control">
										<option value="0">No</option>
										<option value="1">Si</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="selChequeoElectricoConexiones" class="col-sm-6">Chequeo eléctrico de conexiones</label>
								<div class="col-sm-6">
									<select id="selChequeoElectricoConexiones" name="selChequeoElectricoConexiones" class="form-control">
										<option value="0">No</option>
										<option value="1">Si</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<hr />
					<div class="table-responsive">
						<table class="table table-condensed">
							<thead>
								<tr>
									<td class="text-primary" colspan="4">Revisión técnica efectuada</td>
									<th>Amp. Placa</th>
									<th colspan="3">Amperaje</th>
									<th colspan="3">Voltaje</th>
								</tr>
								<tr>
									<th>Motores</th>
									<th>H.P.</th>
									<th>Fases</th>
									<th>Cant.</th>
									<th>&nbsp;</th>
									<th>L1</th>
									<th>L2</th>
									<th>L3</th>
									<th>L1 y L2</th>
									<th>L1 y L3</th>
									<th>L2 y L3</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Compresor</td>
									<td><input id="txtCompresorHP" name="txtCompresorHP" class="form-control revision input-sm" style="min-width: 50px" value="0"/></td>
									<td><input id="txtCompresorFases" name="txtCompresorFases" class="form-control revision input-sm" style="min-width: 50px" value="0"/></td>
									<td><input id="txtCompresorCantidad" name="txtCompresorCantidad" class="form-control revision input-sm" style="min-width: 50px" value="0"/></td>
									<td><input id="txtCompresorAmp" name="txtCompresorAmp" class="form-control revision input-sm" style="min-width: 50px" value="0"/></td>
									<td><input id="txtCompresorL1" name="txtCompresorL1" class="form-control revision input-sm" style="min-width: 50px" value="0"/></td>
									<td><input id="txtCompresorL2" name="txtCompresorL2" class="form-control revision input-sm" style="min-width: 50px" value="0"/></td>
									<td><input id="txtCompresorL3" name="txtCompresorL3" class="form-control revision input-sm" style="min-width: 50px" value="0"/></td>
									<td><input id="txtCompresorL1L2" name="txtCompresorL1L2" class="form-control revision input-sm" style="min-width: 50px" value="0"/></td>
									<td><input id="txtCompresorL2L3" name="txtCompresorL2L3" class="form-control revision input-sm" style="min-width: 50px" value="0"/></td>
									<td><input id="txtCompresorL1L3" name="txtCompresorL1L3" class="form-control revision input-sm" style="min-width: 50px" value="0"/></td>
								</tr>
								<tr>
									<td>Evaporador</td>
									<td><input id="txtEvaporadorHP" name="txtEvaporadorHP" class="form-control revision input-sm" value="0"/></td>
									<td><input id="txtEvaporadorFases" name="txtEvaporadorFases" class="form-control revision input-sm" value="0"/></td>
									<td><input id="txtEvaporadorCantidad" name="txtEvaporadorCantidad" class="form-control revision input-sm" value="0"/></td>
									<td><input id="txtEvaporadorAmp" name="txtEvaporadorAmp" class="form-control revision input-sm" value="0"/></td>
									<td><input id="txtEvaporadorL1" name="txtEvaporadorL1" class="form-control revision input-sm" value="0"/></td>
									<td><input id="txtEvaporadorL2" name="txtEvaporadorL2" class="form-control revision input-sm" value="0"/></td>
									<td><input id="txtEvaporadorL3" name="txtEvaporadorL3" class="form-control revision input-sm" value="0"/></td>
									<td><input id="txtEvaporadorL1L2" name="txtEvaporadorL1L2" class="form-control revision input-sm" value="0"/></td>
									<td><input id="txtEvaporadorL2L3" name="txtEvaporadorL2L3" class="form-control revision input-sm" value="0"/></td>
									<td><input id="txtEvaporadorL1L3" name="txtEvaporadorL1L3" class="form-control revision input-sm" value="0"/></td>
								</tr>
								<tr>
									<td>Condensador</td>
									<td><input id="txtCondensadorHP" name="txtCondensadorHP" class="form-control revision input-sm" value="0"/></td>
									<td><input id="txtCondensadorFases" name="txtCondensadorFases" class="form-control revision input-sm" value="0"/></td>
									<td><input id="txtCondensadorCantidad" name="txtCondensadorCantidad" class="form-control revision input-sm" value="0"/></td>
									<td><input id="txtCondensadorAmp" name="txtCondensadorAmp" class="form-control revision input-sm" value="0"/></td>
									<td><input id="txtCondensadorL1" name="txtCondensadorL1" class="form-control revision input-sm" value="0"/></td>
									<td><input id="txtCondensadorL2" name="txtCondensadorL2" class="form-control revision input-sm" value="0"/></td>
									<td><input id="txtCondensadorL3" name="txtCondensadorL3" class="form-control revision input-sm" value="0"/></td>
									<td><input id="txtCondensadorL1L2" name="txtCondensadorL1L2" class="form-control revision input-sm" value="0"/></td>
									<td><input id="txtCondensadorL2L3" name="txtCondensadorL2L3" class="form-control revision input-sm" value="0"/></td>
									<td><input id="txtCondensadorL1L3" name="txtCondensadorL1L3" class="form-control revision input-sm" value="0"/></td>
								</tr>
							</tbody>
						</table>
					</div>
					<hr />
					
					<div class="row">
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-12 text-center"><h3 class="text-primary">Presiones</h3></div>
							</div>
							<div class="form-group">
								<label for="txtSuccion" class="col-sm-6">Succión</label>
								<div class="col-sm-6">
									<input id="txtSuccion" name="txtSuccion" class="form-control" />
								</div>
							</div>
							<div class="form-group">
								<label for="txtDescarga" class="col-sm-6">Descarga</label>
								<div class="col-sm-6">
									<input id="txtDescarga" name="txtDescarga" class="form-control" />
								</div>
							</div>
							<div class="form-group">
								<label for="txtAceite" class="col-sm-6">Aceite</label>
								<div class="col-sm-6">
									<input id="txtAceite" name="txtAceite" class="form-control" />
								</div>
							</div>
							<div class="form-group">
								<label for="txtParoBaja" class="col-sm-6">Paro por baja</label>
								<div class="col-sm-6">
									<input id="txtParoBaja" name="txtParoBaja" class="form-control" />
								</div>
							</div>
							<div class="form-group">
								<label for="txtParoAlta" class="col-sm-6">Paro por alta</label>
								<div class="col-sm-6">
									<input id="txtParoAlta" name="txtParoAlta" class="form-control" />
								</div>
							</div>
							<div class="form-group">
								<label for="txtArranque" class="col-sm-6">Arranque</label>
								<div class="col-sm-6">
									<input id="txtArranque" name="txtArranque" class="form-control" />
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-12 text-center"><h3 class="text-primary">Temperaturas</h3></div>
							</div>
							<div class="form-group">
								<label for="txtDentroCamara" class="col-sm-6">Dentro de la cámara</label>
								<div class="col-sm-6">
									<input id="txtDentroCamara" name="txtDentroCamara" class="form-control" />
								</div>
							</div>
							<div class="form-group">
								<label for="txtAguaEntrada" class="col-sm-6">Agua a la entrada</label>
								<div class="col-sm-6">
									<input id="txtAguaEntrada" name="txtAguaEntrada" class="form-control" />
								</div>
							</div>
							<div class="form-group">
								<label for="txtAguaSalida" class="col-sm-6">Agua a la salida</label>
								<div class="col-sm-6">
									<input id="txtAguaSalida" name="txtAguaSalida" class="form-control" />
								</div>
							</div>
							<div class="form-group">
								<label for="txtAireInyeccion" class="col-sm-6">Aire de inyección</label>
								<div class="col-sm-6">
									<input id="txtAireInyeccion" name="txtAireInyeccion" class="form-control" />
								</div>
							</div>
							<div class="form-group">
								<label for="txtAireRetorno" class="col-sm-6">Aire de retorno</label>
								<div class="col-sm-6">
									<input id="txtAireRetorno" name="txtAireRetorno" class="form-control" />
								</div>
							</div>
							<div class="form-group">
								<label for="txtAmbiente" class="col-sm-6">Ambiente</label>
								<div class="col-sm-6">
									<input id="txtAmbiente" name="txtAmbiente" class="form-control" />
								</div>
							</div>
						</div>
					</div>
					
					<hr />
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

{include file=$PAGE.rutaModulos|cat:"modulos/fotos/winPanel.tpl"}

{include file=$PAGE.rutaModulos|cat:"modulos/ordenes/winCliente.tpl"}
{include file=$PAGE.rutaModulos|cat:"modulos/ordenes/winEquipo.tpl"}