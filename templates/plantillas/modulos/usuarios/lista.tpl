<table id="tblUsuarios" class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>Num_Personal</th>
			<th>Nombre</th>
			<th>Perfil</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
		{foreach from=$lista item="row"}
			<tr>
				<td>{$row.num_personal}</td>
				<td>{$row.nombre}</td>
				<td class="text-center">
					<select id="selPerfil" name="selPerfil" usuario="{$row.num_personal}" class="form-control setPerfil">
						{foreach from=$perfiles item="perfil"}
							<option value="{$perfil.idPerfil}" {if $perfil.idPerfil eq $row.idPerfil}selected{/if}>{$perfil.nombre}</option>
						{/foreach}
					</select>
				</td>
				<td style="text-align: right">
					<button type="button" class="btn btn-primary" action="setCuentas" title="Cuentas que puede modificar el usuario" datos='{$row.json}'><i class="fa fa-balance-scale"></i></button>
					<button type="button" class="btn btn-danger" action="eliminar" title="Eliminar" usuario="{$row.num_personal}"><i class="fa fa-times"></i></button>
				</td>
			</tr>
		{/foreach}
	</tbody>
</table>