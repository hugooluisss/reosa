<div class="box">
	<div class="box-body">
		<div class="row">
			<div class="col-xs-12 text-center">
				<div class="btn-group btn-xs">
					<button type="button" class="btn btn-primary" id="btnTodos">Todos</button>
					<button type="button" class="btn btn-primary" id="btnNinguno">Ninguno</button>
				</div>
			</div>
		</div>
		<div class="table-responsive">
			<table id="tblDatos" class="table table-bordered table-hover">
				<thead>
					<tr>
						<th></th>
						<th>#</th>
						<th>Nombre</th>
						<th>Plaza</th>
						<th>Sexo</th>
						<th title="Sueldo Diario Integrado">Sueldo DInt</th>
						<th>{$cuenta->getConcepto()}</th>
						<th>&nbsp;</th>
					</tr>
				</thead>
				<tbody>
					{foreach from=$lista item="row"}
						<tr>
							<td>
								<input type="checkbox" class="trabajador" datos='{$row.json}' sexo="{$row.sexo}" nombreTipoPlaza="{$row.nombre_plaza} {$row.tipo_nivel}"/>
							</td>
							<td>{$row.num_empleado}</td>
							<td>{$row.nombres} {$row.apellido_p} {$row.apellido_m}</td>
							<td>{$row.nombre_plaza}</td>
							<td class="text-center {if $row.sexo eq 'M'}text-info{else}text-danger{/if}">
								{if $row.sexo eq 'F'}
									<i class="fa fa-female" aria-hidden="true" title="Mujer"></i>
								{else}
									<i class="fa fa-male" aria-hidden="true" title="Hombre"></i>
								{/if}
								
							</td>
							<td>
								<input class="form-control text-right montoCuenta" movimiento="{$row.idMovimiento}" type="number" value="{$row.sueldointegrado|default:0.00}" />
							</td>
							<td class="text-right">
								{if $nomina->getEstado() eq 'C' or $PAGE.usuario->getPerfil() eq 1}
									<input class="form-control text-right montoCuenta" cuenta="{$cuenta->getId()}" movimiento="{$row.idMovimiento}" type="number" value="{$row.monto|default:0.00}" />
								{else}
									{$row.monto|default:0.00}
								{/if}
							</td>
							<td class="text-right">
								<button type="button" class="btn btn-primary" action="info" title="Detalle del trabajador" datos='{$row.json}'><i class="fa fa-info"></i></button>
							</td>
						</tr>
					{/foreach}
				</tbody>
			</table>
		</div>
	</div>
</div>