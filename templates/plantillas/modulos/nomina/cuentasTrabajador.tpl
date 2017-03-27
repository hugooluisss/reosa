<table id="tblDatos" class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>Clave</th>
			<th>Concepto</th>
			<th>Monto</th>
		</tr>
	</thead>
	<tbody>
		{foreach from=$lista item="row"}
			<tr datos='{$row.json}'>
				<td>{$row.clave}</td>
				<td>{$row.concepto}</td>
				<td class="text-right">
					{if $nomina->getEstado() eq 'C' or $PAGE.usuario->getPerfil() eq 1}
						<input type="number" class="form-control input-sm text-right" value="{$row.monto|default:0.00}" />
					{else}
						{$row.monto|default:0.00}
					{/if}
				</td>
			</tr>
		{/foreach}
	</tbody>
</table>