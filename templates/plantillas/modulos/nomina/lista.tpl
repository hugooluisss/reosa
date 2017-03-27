<div class="box">
	<div class="box-body">
		<table id="tblDatos" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Clave</th>
					<th>Periodo</th>
					<th>Estado</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				{foreach from=$lista item="row"}
					<tr>
						<td>{$row.idNomina}</td>
						<td>{$row.clave}</td>
						<td>{$row.inicio} - {$row.fin}</td>
						<td>
							{if $row.estado eq 'C'}Capturando{/if}
							{if $row.estado eq 'T'}Captura terminada{/if}
							{if $row.estado eq 'R'}Registrada{/if}
						</td>
						<td style="text-align: right">
							{if $PAGE.usuario->getPerfil() eq 1}
								<button type="button" class="btn btn-success" action="construir" title="Construir" datos='{$row.json}'><i class="fa fa-cogs"></i></button>
								{if $row.estado eq 'A'}
									<button type="button" class="btn btn-primary" action="modificar" title="Modificar" datos='{$row.json}'><i class="fa fa-pencil"></i></button>
									<button type="button" class="btn btn-danger" action="eliminar" title="Eliminar" identificador="{$row.idNomina}"><i class="fa fa-times"></i></button>
								{/if}
								{if $row.estado eq 'C'}
									<button type="button" class="btn btn-primary" action="terminar" title="Terminar captura" datos='{$row.json}'><i class="fa fa-check"></i></button>
								{/if}
							{/if}
							
							{if $PAGE.usuario->getPerfil() eq 2}
								<button type="button" class="btn btn-success" action="construir" title="Construir" datos='{$row.json}'><i class="fa fa-cogs"></i></button>
							{/if}
						</td>
					</tr>
				{/foreach}
			</tbody>
		</table>
	</div>
</div>