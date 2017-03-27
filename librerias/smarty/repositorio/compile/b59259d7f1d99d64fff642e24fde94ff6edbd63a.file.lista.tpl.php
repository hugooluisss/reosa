<?php /* Smarty version Smarty-3.1.11, created on 2017-03-23 09:23:30
         compiled from "templates/plantillas/modulos/nomina/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26915722558a5bb408ad314-52231248%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b59259d7f1d99d64fff642e24fde94ff6edbd63a' => 
    array (
      0 => 'templates/plantillas/modulos/nomina/lista.tpl',
      1 => 1490282591,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26915722558a5bb408ad314-52231248',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_58a5bb4093a8e7_91197596',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a5bb4093a8e7_91197596')) {function content_58a5bb4093a8e7_91197596($_smarty_tpl) {?><div class="box">
	<div class="box-body">
		<table id="tblDatos" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Clave</th>
					<th>Periodo</th>
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
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['idNomina'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['clave'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['inicio'];?>
 - <?php echo $_smarty_tpl->tpl_vars['row']->value['fin'];?>
</td>
						<td>
							<?php if ($_smarty_tpl->tpl_vars['row']->value['estado']=='C'){?>Capturando<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['row']->value['estado']=='T'){?>Captura terminada<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['row']->value['estado']=='R'){?>Registrada<?php }?>
						</td>
						<td style="text-align: right">
							<?php if ($_smarty_tpl->tpl_vars['PAGE']->value['usuario']->getPerfil()==1){?>
								<button type="button" class="btn btn-success" action="construir" title="Construir" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-cogs"></i></button>
								<?php if ($_smarty_tpl->tpl_vars['row']->value['estado']=='A'){?>
									<button type="button" class="btn btn-primary" action="modificar" title="Modificar" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-pencil"></i></button>
									<button type="button" class="btn btn-danger" action="eliminar" title="Eliminar" identificador="<?php echo $_smarty_tpl->tpl_vars['row']->value['idNomina'];?>
"><i class="fa fa-times"></i></button>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['row']->value['estado']=='C'){?>
									<button type="button" class="btn btn-primary" action="terminar" title="Terminar captura" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-check"></i></button>
								<?php }?>
							<?php }?>
							
							<?php if ($_smarty_tpl->tpl_vars['PAGE']->value['usuario']->getPerfil()==2){?>
								<button type="button" class="btn btn-success" action="construir" title="Construir" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-cogs"></i></button>
							<?php }?>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>