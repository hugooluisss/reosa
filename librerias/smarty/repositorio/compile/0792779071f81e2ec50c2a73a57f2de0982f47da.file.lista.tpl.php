<?php /* Smarty version Smarty-3.1.11, created on 2017-03-06 13:36:33
         compiled from "templates/plantillas/modulos/usuarios/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5994925658ac5fec473fd1-01054132%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0792779071f81e2ec50c2a73a57f2de0982f47da' => 
    array (
      0 => 'templates/plantillas/modulos/usuarios/lista.tpl',
      1 => 1488828991,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5994925658ac5fec473fd1-01054132',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_58ac5fec50b597_23444119',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
    'perfiles' => 0,
    'perfil' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ac5fec50b597_23444119')) {function content_58ac5fec50b597_23444119($_smarty_tpl) {?><table id="tblUsuarios" class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>Num_Personal</th>
			<th>Nombre</th>
			<th>Perfil</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['num_personal'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
				<td class="text-center">
					<select id="selPerfil" name="selPerfil" usuario="<?php echo $_smarty_tpl->tpl_vars['row']->value['num_personal'];?>
" class="form-control setPerfil">
						<?php  $_smarty_tpl->tpl_vars["perfil"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["perfil"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['perfiles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["perfil"]->key => $_smarty_tpl->tpl_vars["perfil"]->value){
$_smarty_tpl->tpl_vars["perfil"]->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['perfil']->value['idPerfil'];?>
" <?php if ($_smarty_tpl->tpl_vars['perfil']->value['idPerfil']==$_smarty_tpl->tpl_vars['row']->value['idPerfil']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['perfil']->value['nombre'];?>
</option>
						<?php } ?>
					</select>
				</td>
				<td style="text-align: right">
					<button type="button" class="btn btn-primary" action="setCuentas" title="Cuentas que puede modificar el usuario" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-balance-scale"></i></button>
					<button type="button" class="btn btn-danger" action="eliminar" title="Eliminar" usuario="<?php echo $_smarty_tpl->tpl_vars['row']->value['num_personal'];?>
"><i class="fa fa-times"></i></button>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table><?php }} ?>