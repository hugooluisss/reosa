<?php /* Smarty version Smarty-3.1.11, created on 2017-03-23 11:10:55
         compiled from "templates/plantillas/modulos/cuentas/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82767777658ab43b12901e5-06449320%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a630ce833440f4b5f0a2c896324785ae0d66eed9' => 
    array (
      0 => 'templates/plantillas/modulos/cuentas/panel.tpl',
      1 => 1490289054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82767777658ab43b12901e5-06449320',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_58ab43b142afe8_27799813',
  'variables' => 
  array (
    'sat' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ab43b142afe8_27799813')) {function content_58ab43b142afe8_27799813($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Catálogo de cuentas</h1>
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
						<label for="selSAT" class="col-lg-2">SAT</label>
						<div class="col-lg-8">
							<select class="form-control" id="selSAT" name="selSAT">
								<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['idSAT'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['clave'];?>
 - <?php echo $_smarty_tpl->tpl_vars['row']->value['descripcion'];?>
 (<?php if ($_smarty_tpl->tpl_vars['row']->value['tipo']=='P'){?>Percepciones<?php }else{ ?>Deducciones<?php }?>)</option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="txtConcepto" class="col-lg-2">Concepto</label>
						<div class="col-lg-8">
							<input class="form-control" id="txtConcepto" name="txtConcepto">
						</div>
					</div>
					<div class="form-group">
						<label for="selTipo" class="col-lg-2">Tipo</label>
						<div class="col-lg-2">
							<select class="form-control" id="selTipo" name="selTipo">
								<option value="G">Gravado</option>
								<option value="E">Excento</option>
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