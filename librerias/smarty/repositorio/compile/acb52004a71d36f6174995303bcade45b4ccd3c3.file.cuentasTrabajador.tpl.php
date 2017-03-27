<?php /* Smarty version Smarty-3.1.11, created on 2017-03-06 10:19:49
         compiled from "templates/plantillas/modulos/nomina/cuentasTrabajador.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2750134058a4aafadd5774-49217366%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'acb52004a71d36f6174995303bcade45b4ccd3c3' => 
    array (
      0 => 'templates/plantillas/modulos/nomina/cuentasTrabajador.tpl',
      1 => 1488817180,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2750134058a4aafadd5774-49217366',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_58a4aafaea1703_40039616',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
    'nomina' => 0,
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a4aafaea1703_40039616')) {function content_58a4aafaea1703_40039616($_smarty_tpl) {?><table id="tblDatos" class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>Clave</th>
			<th>Concepto</th>
			<th>Monto</th>
		</tr>
	</thead>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
			<tr datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['clave'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['concepto'];?>
</td>
				<td class="text-right">
					<?php if ($_smarty_tpl->tpl_vars['nomina']->value->getEstado()=='C'||$_smarty_tpl->tpl_vars['PAGE']->value['usuario']->getPerfil()==1){?>
						<input type="number" class="form-control input-sm text-right" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['row']->value['monto'])===null||$tmp==='' ? 0.00 : $tmp);?>
" />
					<?php }else{ ?>
						<?php echo (($tmp = @$_smarty_tpl->tpl_vars['row']->value['monto'])===null||$tmp==='' ? 0.00 : $tmp);?>

					<?php }?>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table><?php }} ?>