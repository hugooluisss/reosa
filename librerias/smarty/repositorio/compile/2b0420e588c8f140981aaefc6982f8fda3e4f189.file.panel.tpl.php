<?php /* Smarty version Smarty-3.1.11, created on 2017-03-28 21:19:20
         compiled from "templates/plantillas/modulos/clientes/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:118016699258daa65f9e7ca1-26451794%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b0420e588c8f140981aaefc6982f8fda3e4f189' => 
    array (
      0 => 'templates/plantillas/modulos/clientes/panel.tpl',
      1 => 1490732005,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '118016699258daa65f9e7ca1-26451794',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_58daa65fb34551_70248903',
  'variables' => 
  array (
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58daa65fb34551_70248903')) {function content_58daa65fb34551_70248903($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Catálogo de clientes</h1>
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
		</form>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/equipos/winEquipos.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>