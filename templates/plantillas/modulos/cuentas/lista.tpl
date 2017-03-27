<div class="box">
	<div class="box-body">
		<table id="tblDatos" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Clave</th>
					<th>SAT</th>
					<th>Descripción</th>
					<th>Tipo</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				{foreach from=$lista item="row"}
					<tr title="SAT: {$row.clavesat} - {$row.descripcion}">
						<td style="border-left: 3px solid {if $row.tipo eq 'P'}green{else}red{/if}">{$row.idCuenta}</td>
						<td>{$row.clave}</td>
						<td>{$row.clavesat}</td>
						<td>{$row.concepto}</td>
						<td>{if $row.tipo eq 'P'}Percepciones{else}Deducciones{/if}</td>
						<td class="text-right">
							<button type="button" class="btn btn-success" action="modificar" title="Modificar" datos='{$row.json}'><i class="fa fa-pencil"></i></button>
							<button type="button" class="btn btn-danger" action="eliminar" title="Eliminar" identificador="{$row.idRegimen}"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				{/foreach}
			</tbody>
		</table>
	</div>
</div>