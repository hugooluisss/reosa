<?php /* Smarty version Smarty-3.1.11, created on 2017-10-23 11:04:49
         compiled from "templates/plantillas/modulos/fotos/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:136563615658de86d4aa8461-49439984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ffb3add48bbcfeb55389523042a570eb0ac059f' => 
    array (
      0 => 'templates/plantillas/modulos/fotos/lista.tpl',
      1 => 1508768533,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136563615658de86d4aa8461-49439984',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_58de86d4b556e0_38363276',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58de86d4b556e0_38363276')) {function content_58de86d4b556e0_38363276($_smarty_tpl) {?><div class="table-responsive">
	<table id="tblFotos" class="table table-bordered table-hover">
		<thead>
			<tr>
				<th>Fecha</th>
				<th>Nombre</th>
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
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['fecha'];?>
</td>
					<td><a href="<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
" target="_blank" download="img.jpg"><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</a></td>
					<td style="text-align: right">
						<button type="button" class="btn btn-danger" action="eliminar" title="Eliminar" identificador="<?php echo $_smarty_tpl->tpl_vars['row']->value['idFoto'];?>
"><i class="fa fa-times"></i></button>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div><?php }} ?>