<div class="box">
	<div class="box-body table-responsive">
		<table id="tblDatos" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Fecha</th>
					<th>Reporte</th>
					<th>Cliente</th>
					<th>Técnico</th>
					<th>Estado</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				{foreach from=$lista item="row"}
					<tr>
						<td style="border-left: 2px solid {$row.color}">{$row.fecha}</td>
						<td>{$row.idOrden}</td>
						<td>{$row.cliente}</td>
						<td>{$row.usuario}</td>
						<td><span style="color: {$row.color}">{$row.estado}</span></td>
						<td style="text-align: right">
							<button type="button" class="btn btn-default" action="email" title="Enviar por email" identificador="{$row.idOrden}" correo="{$row.correo}"><i class="fa fa-envelope-o"></i></button>
							<a href="?mod=cordenes&action=imprimirPantalla&orden={$row.idOrden}" target="_blank" class="btn btn-default"><i class="fa fa-file-pdf-o"></i></a>
							<button type="button" class="btn btn-default" action="fotos" title="Fotografías" datos='{$row.json}'><i class="fa fa-picture-o" aria-hidden="true"></i>
</button>
							<button type="button" class="btn btn-success" action="modificar" title="Modificar" datos='{$row.json}'><i class="fa fa-pencil"></i></button>
							
							{if $row.eliminar eq 1}
								<button type="button" class="btn btn-danger" action="eliminar" title="Eliminar" item="{$row.idOrden}"><i class="fa fa-times"></i></button>
							{/if}
						</td>
					</tr>
				{/foreach}
			</tbody>
		</table>
	</div>
</div>