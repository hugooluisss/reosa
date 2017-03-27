<div class="modal fade" id="winCuentas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1>Cuentas</h1>
			</div>
			<div class="modal-body">
				<div class="list-group">
					<table id="tblCuentas" class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>Clave</th>
								<th>Nombre</th>
								<th>&nbsp;</th>
							</tr>
						</thead>
						<tbody>
							{foreach from=$cuentas item="row"}
								<tr>
									<td>{$row.clave}</td>
									<td>{$row.concepto}</td>
									<td class="text-center">
										<input type="checkbox" class="cuenta" value="{$row.idCuenta}" cuenta="{$row.idCuenta}"/>
									</td>
								</tr>
							{/foreach}
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>