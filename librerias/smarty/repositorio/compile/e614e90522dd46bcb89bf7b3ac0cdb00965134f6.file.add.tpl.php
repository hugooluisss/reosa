<?php /* Smarty version Smarty-3.1.11, created on 2017-04-03 11:25:47
         compiled from "templates/plantillas/modulos/equipos/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82337977658e2778ba7ae39-44077816%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e614e90522dd46bcb89bf7b3ac0cdb00965134f6' => 
    array (
      0 => 'templates/plantillas/modulos/equipos/add.tpl',
      1 => 1491236728,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82337977658e2778ba7ae39-44077816',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_58e2778ba7cfc3_19410371',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58e2778ba7cfc3_19410371')) {function content_58e2778ba7cfc3_19410371($_smarty_tpl) {?><form role="form" id="frmAddEquipos" class="form-horizontal" onsubmit="javascript: return false;">
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
</form><?php }} ?>