<?php /* Smarty version Smarty-3.1.11, created on 2017-03-28 22:17:09
         compiled from "templates/plantillas/modulos/estados/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23730781158db3545391d77-37237630%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd90416d9f99fe96685b90c925255f90e8ad6d0c6' => 
    array (
      0 => 'templates/plantillas/modulos/estados/panel.tpl',
      1 => 1474999783,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23730781158db3545391d77-37237630',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_58db35453dc2f2_98425174',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58db35453dc2f2_98425174')) {function content_58db35453dc2f2_98425174($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Estado de pedidos</h1>
	</div>
</div>

<ul id="panelTabs" class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#listas">Lista</a></li>
  <li><a data-toggle="tab" href="#add">Agregar o Modificar</a></li>
</ul>

<div class="tab-content">
	<div id="listas" class="tab-pane fade in active">
		<div id="dvLista">
			
		</div>
	</div>
	
	<div id="add" class="tab-pane fade">
		<form role="form" id="frmAdd" class="form-horizontal" onsubmit="javascript: return false;">
			<div class="box">
				<div class="box-body">			
					<div class="form-group">
						<label for="txtNombre" class="col-lg-2">Nombre</label>
						<div class="col-lg-3">
							<input class="form-control" id="txtNombre" name="txtNombre">
						</div>
					</div>
					<div class="form-group">
						<label for="txtColor" class="col-lg-2">Color</label>
						<div class="col-lg-3">
							<input class="form-control" id="txtColor" name="txtColor">
						</div>
					</div>
				</div>
				<div class="box-footer">
					<button type="reset" id="btnReset" class="btn btn-default">Cancelar</button>
					<button type="submit" class="btn btn-info pull-right">Guardar</button>
					<input type="hidden" id="id"/>
				</div>
			</div>
		</form>
	</div>
</div><?php }} ?>