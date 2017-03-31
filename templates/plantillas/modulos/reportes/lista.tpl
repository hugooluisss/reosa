<table id="tblDatos" class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>Reporte</th>
			<th>Cliente</th>
			<th>Solicitante</th>
			<th>Asignado</th>
		</tr>
	</thead>
	<tbody>
		{foreach from=$lista item="row"}
			<tr>
				<td style="border-left: 3px solid {$row.color}">{$row.idOrden}</td>
				<td>{$row.cliente}</td>
				<td>{$row.solicitante}</td>
				<td>{$row.asignado}</td>
			</tr>
		{/foreach}
	</tbody>
</table>