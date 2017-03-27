<?php /* Smarty version Smarty-3.1.11, created on 2017-03-23 09:21:00
         compiled from "templates/plantillas/modulos/nomina/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:121153673958a5bb3fc997a1-72862062%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5385f1c14c6a9621043ebca38081a5b81aeb918f' => 
    array (
      0 => 'templates/plantillas/modulos/nomina/panel.tpl',
      1 => 1490282319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121153673958a5bb3fc997a1-72862062',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_58a5bb3fd085a4_64681803',
  'variables' => 
  array (
    'tipos' => 0,
    'row' => 0,
    'plazas' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a5bb3fd085a4_64681803')) {function content_58a5bb3fd085a4_64681803($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Nómina</h1>
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
						<label for="txtInicio" class="col-lg-2">Inicio</label>
						<div class="col-lg-2">
							<input class="form-control" id="txtInicio" name="txtInicio" placeholder="Y-m-d">
						</div>
					</div>
					<div class="form-group">
						<label for="txtFin" class="col-lg-2">Fin</label>
						<div class="col-lg-2">
							<input class="form-control" id="txtFin" name="txtFin" placeholder="Y-m-d">
						</div>
					</div>
					<div class="form-group">
						<label for="txtPago" class="col-lg-2">Pago</label>
						<div class="col-lg-2">
							<input class="form-control" id="txtPago" name="txtPago" placeholder="Y-m-d">
						</div>
					</div>
					<div class="form-group">
						<label for="selEstado" class="col-lg-2">Tipo</label>
						<div class="col-lg-3">
							<select class="form-control" id="selTipo" name="selTipo">
								<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tipos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['idTipo'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['clave'];?>
 - <?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="selEstado" class="col-lg-2">Tipo plaza trabajador</label>
						<div class="col-lg-5">
							<select class="form-control" id="selTipoPlaza" name="selTipoPlaza" multiple="true">
								<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['plazas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value;?>
</option>
								<?php } ?>
							</select>
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