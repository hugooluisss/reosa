<?php /* Smarty version Smarty-3.1.11, created on 2017-03-23 08:53:33
         compiled from "templates/plantillas/modulos/nomina/listaTrabajadores.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24103098758a49f6dce8220-76617135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1ea15476987b1810e17adbf3cc9d402815ecb47' => 
    array (
      0 => 'templates/plantillas/modulos/nomina/listaTrabajadores.tpl',
      1 => 1490280810,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24103098758a49f6dce8220-76617135',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_58a49f6dd48ba6_39252157',
  'variables' => 
  array (
    'cuenta' => 0,
    'lista' => 0,
    'row' => 0,
    'nomina' => 0,
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a49f6dd48ba6_39252157')) {function content_58a49f6dd48ba6_39252157($_smarty_tpl) {?><div class="box">
	<div class="box-body">
		<div class="row">
			<div class="col-xs-12 text-center">
				<div class="btn-group btn-xs">
					<button type="button" class="btn btn-primary" id="btnTodos">Todos</button>
					<button type="button" class="btn btn-primary" id="btnNinguno">Ninguno</button>
				</div>
			</div>
		</div>
		<div class="table-responsive">
			<table id="tblDatos" class="table table-bordered table-hover">
				<thead>
					<tr>
						<th></th>
						<th>#</th>
						<th>Nombre</th>
						<th>Plaza</th>
						<th>Sexo</th>
						<th title="Sueldo Diario Integrado">Sueldo DInt</th>
						<th><?php echo $_smarty_tpl->tpl_vars['cuenta']->value->getConcepto();?>
</th>
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
							<td>
								<input type="checkbox" class="trabajador" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
' sexo="<?php echo $_smarty_tpl->tpl_vars['row']->value['sexo'];?>
" nombreTipoPlaza="<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre_plaza'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['tipo_nivel'];?>
"/>
							</td>
							<td><?php echo $_smarty_tpl->tpl_vars['row']->value['num_empleado'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombres'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['apellido_p'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['apellido_m'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre_plaza'];?>
</td>
							<td class="text-center <?php if ($_smarty_tpl->tpl_vars['row']->value['sexo']=='M'){?>text-info<?php }else{ ?>text-danger<?php }?>">
								<?php if ($_smarty_tpl->tpl_vars['row']->value['sexo']=='F'){?>
									<i class="fa fa-female" aria-hidden="true" title="Mujer"></i>
								<?php }else{ ?>
									<i class="fa fa-male" aria-hidden="true" title="Hombre"></i>
								<?php }?>
								
							</td>
							<td>
								<input class="form-control text-right montoCuenta" movimiento="<?php echo $_smarty_tpl->tpl_vars['row']->value['idMovimiento'];?>
" type="number" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['row']->value['sueldointegrado'])===null||$tmp==='' ? 0.00 : $tmp);?>
" />
							</td>
							<td class="text-right">
								<?php if ($_smarty_tpl->tpl_vars['nomina']->value->getEstado()=='C'||$_smarty_tpl->tpl_vars['PAGE']->value['usuario']->getPerfil()==1){?>
									<input class="form-control text-right montoCuenta" cuenta="<?php echo $_smarty_tpl->tpl_vars['cuenta']->value->getId();?>
" movimiento="<?php echo $_smarty_tpl->tpl_vars['row']->value['idMovimiento'];?>
" type="number" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['row']->value['monto'])===null||$tmp==='' ? 0.00 : $tmp);?>
" />
								<?php }else{ ?>
									<?php echo (($tmp = @$_smarty_tpl->tpl_vars['row']->value['monto'])===null||$tmp==='' ? 0.00 : $tmp);?>

								<?php }?>
							</td>
							<td class="text-right">
								<button type="button" class="btn btn-primary" action="info" title="Detalle del trabajador" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-info"></i></button>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div><?php }} ?>