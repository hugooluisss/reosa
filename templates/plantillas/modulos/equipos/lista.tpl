<div class="row">
	<div class="col-md-12">
		<button id="btnAddEquipo" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Nuevo</button>
	</div>
</div>

<div class="table-responsive">
	<table id="tblDatosEquipos" class="table table-bordered table-hover">
		<thead>
			<tr>
				<th>Código</th>
				<th>Marca</th>
				<th>Modelo</th>
				<th>Área</th>
				<th>&nbsp;</th>
			</tr>
		</thead>
		<tbody>
			{foreach from=$lista item="row"}
				<tr>
					<td>{$row.codigo}</td>
					<td>{$row.marca}</td>
					<td>{$row.modelo}</td>
					<td>{$row.area}</td>
					<td style="text-align: right">
						<button type="button" class="btn btn-primary" action="modificar" title="Modificar" datos='{$row.json}'><i class="fa fa-edit"></i></button>
						<button type="button" class="btn btn-danger" action="eliminar" title="Eliminar" identificador="{$row.idEquipo}"><i class="fa fa-times"></i></button>
					</td>
				</tr>
			{/foreach}
		</tbody>
	</table>
</div>