<?php /* Smarty version Smarty-3.1.11, created on 2017-02-20 11:56:57
         compiled from "templates/plantillas/modulos/regimen/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198281634758ab2de9220bf0-66439183%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1680fdf768a3bd56bd70b6b44b8977c42fec1ad7' => 
    array (
      0 => 'templates/plantillas/modulos/regimen/panel.tpl',
      1 => 1487613364,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198281634758ab2de9220bf0-66439183',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_58ab2de926b8a5_59080845',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ab2de926b8a5_59080845')) {function content_58ab2de926b8a5_59080845($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Catálogo "Régimen de contratación"</h1>
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
						<label for="txtDescripcion" class="col-lg-2">Descripción</label>
						<div class="col-lg-3">
							<input class="form-control" id="txtDescripcion" name="txtDescripcion">
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