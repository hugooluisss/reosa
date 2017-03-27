<?php /* Smarty version Smarty-3.1.11, created on 2017-03-27 08:45:05
         compiled from "templates/plantillas/modulos/cuentas/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:38774492258ab43b1e02c06-53859493%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd60041fd73186ceb3bdf5087f2894e346b7084e3' => 
    array (
      0 => 'templates/plantillas/modulos/cuentas/lista.tpl',
      1 => 1490625892,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38774492258ab43b1e02c06-53859493',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_58ab43b1e63388_84504431',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ab43b1e63388_84504431')) {function content_58ab43b1e63388_84504431($_smarty_tpl) {?><div class="box">
	<div class="box-body">
		<table id="tblDatos" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Clave</th>
					<th>SAT</th>
					<th>Descripción</th>
					<th>Tipo</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
					<tr title="SAT: <?php echo $_smarty_tpl->tpl_vars['row']->value['clavesat'];?>
 - <?php echo $_smarty_tpl->tpl_vars['row']->value['descripcion'];?>
">
						<td style="border-left: 3px solid <?php if ($_smarty_tpl->tpl_vars['row']->value['tipo']=='P'){?>green<?php }else{ ?>red<?php }?>"><?php echo $_smarty_tpl->tpl_vars['row']->value['idCuenta'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['clave'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['clavesat'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['concepto'];?>
</td>
						<td><?php if ($_smarty_tpl->tpl_vars['row']->value['tipo']=='P'){?>Percepciones<?php }else{ ?>Deducciones<?php }?></td>
						<td class="text-right">
							<button type="button" class="btn btn-success" action="modificar" title="Modificar" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-pencil"></i></button>
							<button type="button" class="btn btn-danger" action="eliminar" title="Eliminar" identificador="<?php echo $_smarty_tpl->tpl_vars['row']->value['idRegimen'];?>
"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>