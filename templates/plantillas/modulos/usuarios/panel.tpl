<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Administración de usuarios</h1>
	</div>
</div>

<div class="box">
	<div class="box-header">
		<h3 class="box-title">Agregar trabajador</h3>
	</div>
	<div class="box-body">
		<div class="col-lg-2">
			<label for="txtTrabajador" class="control-label">Nombre</label>
		</div>
		<div class="col-lg-8">
			<input class="form-control" id="txtTrabajador" name="txtTrabajador" type="text" autocomplete="off" autofocus="true" value=""/>
		</div>
	</div>
</div>

<div class="panel">
	<div class="panel-body">
		<div id="dvLista">
			
		</div>
	</div>
</div>

{include file=$PAGE.rutaModulos|cat:"modulos/usuarios/winCuentas.tpl"}