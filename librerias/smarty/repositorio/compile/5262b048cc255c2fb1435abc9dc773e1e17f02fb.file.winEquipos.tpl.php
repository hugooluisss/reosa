<?php /* Smarty version Smarty-3.1.11, created on 2017-04-03 11:25:47
         compiled from "templates/plantillas/modulos/equipos/winEquipos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:120211972458dab71a90a302-48653093%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5262b048cc255c2fb1435abc9dc773e1e17f02fb' => 
    array (
      0 => 'templates/plantillas/modulos/equipos/winEquipos.tpl',
      1 => 1491236742,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120211972458dab71a90a302-48653093',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_58dab71a93e705_04791230',
  'variables' => 
  array (
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58dab71a93e705_04791230')) {function content_58dab71a93e705_04791230($_smarty_tpl) {?><div class="modal fade" id="winEquipos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1>Equipos</h1>
			</div>
			<div class="modal-body">
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="winAddEquipo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1>Agregar / Modificar equipo</h1>
			</div>
			<div class="modal-body">
				<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/equipos/add.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>
		</div>
	</div>
</div><?php }} ?>