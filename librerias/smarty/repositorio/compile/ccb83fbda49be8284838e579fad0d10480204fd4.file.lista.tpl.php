<?php /* Smarty version Smarty-3.1.11, created on 2017-10-23 10:37:18
         compiled from "templates/plantillas/modulos/ordenes/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4817353558db50286b4026-31829242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccb83fbda49be8284838e579fad0d10480204fd4' => 
    array (
      0 => 'templates/plantillas/modulos/ordenes/lista.tpl',
      1 => 1508772697,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4817353558db50286b4026-31829242',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_58db50288b0b72_58661259',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58db50288b0b72_58661259')) {function content_58db50288b0b72_58661259($_smarty_tpl) {?><div class="box">
	<div class="box-body table-responsive">
		<table id="tblDatos" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Fecha</th>
					<th>Reporte</th>
					<th>Cliente</th>
					<th>Técnico</th>
					<th>Estado</th>
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
						<td style="border-left: 2px solid <?php echo $_smarty_tpl->tpl_vars['row']->value['color'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['fecha'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['idOrden'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['cliente'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['usuario'];?>
</td>
						<td><span style="color: <?php echo $_smarty_tpl->tpl_vars['row']->value['color'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['estado'];?>
</span></td>
						<td style="text-align: right">
							<button type="button" class="btn btn-default" action="email" title="Enviar por email" identificador="<?php echo $_smarty_tpl->tpl_vars['row']->value['idOrden'];?>
" correo="<?php echo $_smarty_tpl->tpl_vars['row']->value['correo'];?>
"><i class="fa fa-envelope-o"></i></button>
							<a href="?mod=cordenes&action=imprimirPantalla&orden=<?php echo $_smarty_tpl->tpl_vars['row']->value['idOrden'];?>
" target="_blank" class="btn btn-default"><i class="fa fa-file-pdf-o"></i></a>
							<button type="button" class="btn btn-default" action="fotos" title="Fotografías" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-picture-o" aria-hidden="true"></i>
</button>
							<button type="button" class="btn btn-success" action="modificar" title="Modificar" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-pencil"></i></button>
							
							<?php if ($_smarty_tpl->tpl_vars['row']->value['eliminar']==1){?>
								<button type="button" class="btn btn-danger" action="eliminar" title="Eliminar" item="<?php echo $_smarty_tpl->tpl_vars['row']->value['idOrden'];?>
"><i class="fa fa-times"></i></button>
							<?php }?>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>