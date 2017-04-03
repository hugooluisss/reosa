<?php /* Smarty version Smarty-3.1.11, created on 2017-04-03 11:32:36
         compiled from "templates/plantillas/modulos/ordenes/winEquipo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:51963681758e277e7c47f39-47189472%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70ba64c1df8cacf97e6cd03ece03372e56c90624' => 
    array (
      0 => 'templates/plantillas/modulos/ordenes/winEquipo.tpl',
      1 => 1491237154,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51963681758e277e7c47f39-47189472',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_58e277e7c73ef8_63343115',
  'variables' => 
  array (
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58e277e7c73ef8_63343115')) {function content_58e277e7c73ef8_63343115($_smarty_tpl) {?><div class="modal fade" id="winEquipo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1>Agregar equipo</h1>
			</div>
			<div class="modal-body">
				<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/equipos/add.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>
		</div>
	</div>
</div><?php }} ?>