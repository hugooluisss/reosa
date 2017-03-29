<?php /* Smarty version Smarty-3.1.11, created on 2017-03-28 21:19:20
         compiled from "templates/plantillas/modulos/equipos/winEquipos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:120211972458dab71a90a302-48653093%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5262b048cc255c2fb1435abc9dc773e1e17f02fb' => 
    array (
      0 => 'templates/plantillas/modulos/equipos/winEquipos.tpl',
      1 => 1490732005,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120211972458dab71a90a302-48653093',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_58dab71a93e705_04791230',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58dab71a93e705_04791230')) {function content_58dab71a93e705_04791230($_smarty_tpl) {?><div class="modal fade" id="winEquipos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1>Equipos</h1>
			</div>
			<div class="modal-body">
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="winAddEquipo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1>Agregar / Modificar equipo</h1>
			</div>
			<div class="modal-body">
				<form role="form" id="frmAddEquipos" class="form-horizontal" onsubmit="javascript: return false;">
					<div class="form-group">
						<label for="txtCodigo" class="col-lg-2">Código</label>
						<div class="col-lg-10">
							<input class="form-control" id="txtCodigo" name="txtCodigo">
						</div>
						
					</div>
					<div class="form-group">
						<label for="txtTipo" class="col-lg-2">Tipo</label>
						<div class="col-lg-10">
							<input class="form-control" id="txtTipo" name="txtTipo" type="text">
						</div>
					</div>
					<div class="form-group">
						<label for="txtArea" class="col-lg-2">Área</label>
						<div class="col-lg-10">
							<input class="form-control" id="txtArea" name="txtArea" type="text">
						</div>
					</div>
					<div class="form-group">
						<label for="txtMarca" class="col-lg-2">Marca</label>
						<div class="col-lg-10">
							<input class="form-control" id="txtMarca" name="txtMarca" type="text">
						</div>
					</div>
					<div class="form-group">
						<label for="txtModelo" class="col-lg-2">Modelo</label>
						<div class="col-lg-10">
							<input class="form-control" id="txtModelo" name="txtModelo" type="text">
						</div>
					</div>
					<div class="form-group">
						<label for="txtCapacidad" class="col-lg-2">Capacidad</label>
						<div class="col-lg-10">
							<input class="form-control" id="txtCapacidad" name="txtCapacidad" type="text">
						</div>
					</div>
					<button type="reset" id="btnReset" class="btn btn-default">Cancelar</button>
					<button type="submit" class="btn btn-info pull-right">Guardar</button>
					<input type="hidden" id="idEquipo"/>
					<input type="hidden" id="idCliente"/>
				</form>
			</div>
		</div>
	</div>
</div><?php }} ?>