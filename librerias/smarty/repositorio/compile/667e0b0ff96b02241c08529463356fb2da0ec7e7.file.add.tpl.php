<?php /* Smarty version Smarty-3.1.11, created on 2017-04-03 10:23:48
         compiled from "templates/plantillas/modulos/clientes/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:52675634958e2674772d3b1-98713366%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '667e0b0ff96b02241c08529463356fb2da0ec7e7' => 
    array (
      0 => 'templates/plantillas/modulos/clientes/add.tpl',
      1 => 1491233026,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52675634958e2674772d3b1-98713366',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_58e26747732b99_33662583',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58e26747732b99_33662583')) {function content_58e26747732b99_33662583($_smarty_tpl) {?><form role="form" id="frmAdd" class="form-horizontal" onsubmit="javascript: return false;">
	<div class="box">
		<div class="box-body">
			<div class="form-group">
				<label for="txtNombre" class="col-lg-2">Nombre completo</label>
				<div class="col-lg-8">
					<input class="form-control" id="txtNombre" name="txtNombre">
				</div>
				
			</div>
			<div class="form-group">
				<label for="txtDireccion" class="col-lg-2">Dirección</label>
				<div class="col-lg-3">
					<input class="form-control" id="txtDireccion" name="txtDireccion" type="text">
				</div>
			</div>
			<div class="form-group">
				<label for="txtCiudad" class="col-lg-2">Ciudad</label>
				<div class="col-lg-3">
					<input class="form-control" id="txtCiudad" name="txtCiudad" type="text">
				</div>
			</div>
			<div class="form-group">
				<label for="txtColonia" class="col-lg-2">Colonia</label>
				<div class="col-lg-3">
					<input class="form-control" id="txtColonia" name="txtColonia" type="text">
				</div>
			</div>
		</div>
		<div class="box-footer">
			<button type="reset" id="btnReset" class="btn btn-default">Cancelar</button>
			<button type="submit" class="btn btn-info pull-right">Guardar</button>
			<input type="hidden" id="id"/>
		</div>
	</div>
</form><?php }} ?>