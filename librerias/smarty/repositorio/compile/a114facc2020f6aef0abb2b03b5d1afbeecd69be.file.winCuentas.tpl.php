<?php /* Smarty version Smarty-3.1.11, created on 2017-03-28 10:35:24
         compiled from "templates/plantillas/modulos/usuarios/winCuentas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:196846639558da90cc8832d4-26593210%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a114facc2020f6aef0abb2b03b5d1afbeecd69be' => 
    array (
      0 => 'templates/plantillas/modulos/usuarios/winCuentas.tpl',
      1 => 1488829204,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196846639558da90cc8832d4-26593210',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cuentas' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_58da90cc8a3668_14573342',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58da90cc8a3668_14573342')) {function content_58da90cc8a3668_14573342($_smarty_tpl) {?><div class="modal fade" id="winCuentas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1>Cuentas</h1>
			</div>
			<div class="modal-body">
				<div class="list-group">
					<table id="tblCuentas" class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>Clave</th>
								<th>Nombre</th>
								<th>&nbsp;</th>
							</tr>
						</thead>
						<tbody>
							<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cuentas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
								<tr>
									<td><?php echo $_smarty_tpl->tpl_vars['row']->value['clave'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['row']->value['concepto'];?>
</td>
									<td class="text-center">
										<input type="checkbox" class="cuenta" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['idCuenta'];?>
" cuenta="<?php echo $_smarty_tpl->tpl_vars['row']->value['idCuenta'];?>
"/>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div><?php }} ?>