<?php /* Smarty version Smarty-3.1.11, created on 2017-04-03 10:24:16
         compiled from "templates/plantillas/modulos/ordenes/winCliente.tpl" */ ?>
<?php /*%%SmartyHeaderCode:136856469058e2689ae0dc80-85639871%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4949d42b9333a165f137c5fadc636b30027cfcb8' => 
    array (
      0 => 'templates/plantillas/modulos/ordenes/winCliente.tpl',
      1 => 1491233055,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136856469058e2689ae0dc80-85639871',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_58e2689ae187e8_52659724',
  'variables' => 
  array (
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58e2689ae187e8_52659724')) {function content_58e2689ae187e8_52659724($_smarty_tpl) {?><div class="modal fade" id="winClientes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1>Agregar cliente</h1>
			</div>
			<div class="modal-body">
				<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/clientes/add.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>
		</div>
	</div>
</div><?php }} ?>