<?php /* Smarty version Smarty-3.1.11, created on 2017-02-20 11:28:52
         compiled from "templates/plantillas/modulos/bancos/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:99031525858ab1cc1ae3278-48019064%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88629c897f5c3b040a7bdc8ebe894881fed53d8b' => 
    array (
      0 => 'templates/plantillas/modulos/bancos/panel.tpl',
      1 => 1487611659,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '99031525858ab1cc1ae3278-48019064',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_58ab1cc1b58448_17660703',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ab1cc1b58448_17660703')) {function content_58ab1cc1b58448_17660703($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Catálogo de bancos</h1>
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
						<label for="txtClave" class="col-lg-2">Clave</label>
						<div class="col-lg-3">
							<input class="form-control" id="txtClave" name="txtClave">
						</div>
					</div>		
					<div class="form-group">
						<label for="txtNombre" class="col-lg-2">Nombre</label>
						<div class="col-lg-3">
							<input class="form-control" id="txtNombre" name="txtNombre">
						</div>
					</div>
					<div class="form-group">
						<label for="txtRazonSocial" class="col-lg-2">Razón social</label>
						<div class="col-lg-5">
							<input class="form-control" id="txtRazonSocial" name="txtRazonSocial">
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