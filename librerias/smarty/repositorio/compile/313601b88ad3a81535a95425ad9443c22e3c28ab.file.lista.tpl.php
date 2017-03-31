<?php /* Smarty version Smarty-3.1.11, created on 2017-03-31 13:53:40
         compiled from "templates/plantillas/modulos/reportes/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158489418358dea61e4f5831-03224442%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '313601b88ad3a81535a95425ad9443c22e3c28ab' => 
    array (
      0 => 'templates/plantillas/modulos/reportes/lista.tpl',
      1 => 1490989617,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158489418358dea61e4f5831-03224442',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_58dea61e5c0d85_67109744',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58dea61e5c0d85_67109744')) {function content_58dea61e5c0d85_67109744($_smarty_tpl) {?><table id="tblDatos" class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>Reporte</th>
			<th>Cliente</th>
			<th>Solicitante</th>
			<th>Asignado</th>
		</tr>
	</thead>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
			<tr>
				<td style="border-left: 3px solid <?php echo $_smarty_tpl->tpl_vars['row']->value['color'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['idOrden'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['cliente'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['solicitante'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['asignado'];?>
</td>
			</tr>
		<?php } ?>
	</tbody>
</table><?php }} ?>