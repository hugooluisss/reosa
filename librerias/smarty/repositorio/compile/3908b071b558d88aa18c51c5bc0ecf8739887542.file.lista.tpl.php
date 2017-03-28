<?php /* Smarty version Smarty-3.1.11, created on 2017-03-28 13:31:03
         compiled from "templates/plantillas/modulos/equipos/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:121425424358dab8d3c427a7-02350954%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3908b071b558d88aa18c51c5bc0ecf8739887542' => 
    array (
      0 => 'templates/plantillas/modulos/equipos/lista.tpl',
      1 => 1490729458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121425424358dab8d3c427a7-02350954',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_58dab8d3d43971_36612438',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58dab8d3d43971_36612438')) {function content_58dab8d3d43971_36612438($_smarty_tpl) {?><div class="row">
	<div class="col-md-12">
		<button id="btnAddEquipo" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Nuevo</button>
	</div>
</div>
<table id="tblDatosEquipos" class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>Código</th>
			<th>Marca</th>
			<th>Modelo</th>
			<th>Área</th>
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
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['codigo'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['marca'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['modelo'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['area'];?>
</td>
				<td style="text-align: right">
					<button type="button" class="btn btn-primary" action="modificar" title="Modificar" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-edit"></i></button>
					<button type="button" class="btn btn-danger" action="eliminar" title="Eliminar" identificador="<?php echo $_smarty_tpl->tpl_vars['row']->value['idCliente'];?>
"><i class="fa fa-times"></i></button>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table><?php }} ?>