<div class="box">
	<div class="box-body">
		<table id="tblDatos" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nombre</th>
					<th>Ciudad</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				{foreach from=$lista item="row"}
					<tr>
						<td>{$row.idCliente}</td>
						<td>{$row.nombre}</td>
						<td>{$row.ciudad}</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-default" action="equipos" title="Equipos" datos='{$row.json}'><i class="fa fa-industry"></i></button>
							<button type="button" class="btn btn-primary" action="modificar" title="Modificar" datos='{$row.json}'><i class="fa fa-edit"></i></button>
							<button type="button" class="btn btn-danger" action="eliminar" title="Eliminar" identificador="{$row.idCliente}"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				{/foreach}
			</tbody>
		</table>
	</div>
</div>