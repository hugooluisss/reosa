<table id="tblFotos" class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>Fecha</th>
			<th>Nombre</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
		{foreach from=$lista item="row"}
			<tr>
				<td>{$row.fecha}</td>
				<td><a href="{$row.nombre}" target="_blank" download="img.jpg">{$row.nombre}</a></td>
				<td style="text-align: right">
					<button type="button" class="btn btn-danger" action="eliminar" title="Eliminar" identificador="{$row.idFoto}"><i class="fa fa-times"></i></button>
				</td>
			</tr>
		{/foreach}
	</tbody>
</table>