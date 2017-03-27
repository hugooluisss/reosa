<?php /* Smarty version Smarty-3.1.11, created on 2017-03-06 12:02:39
         compiled from "templates/plantillas/modulos/usuarios/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:135083520558ac5feb5c7c10-33661234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75fca16c9665563fbe115b9d9483a90d1409c54e' => 
    array (
      0 => 'templates/plantillas/modulos/usuarios/panel.tpl',
      1 => 1488823358,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '135083520558ac5feb5c7c10-33661234',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_58ac5feb611206_37259445',
  'variables' => 
  array (
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ac5feb611206_37259445')) {function content_58ac5feb611206_37259445($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Administración de usuarios</h1>
	</div>
</div>

<div class="box">
	<div class="box-header">
		<h3 class="box-title">Agregar trabajador</h3>
	</div>
	<div class="box-body">
		<div class="col-lg-2">
			<label for="txtTrabajador" class="control-label">Nombre</label>
		</div>
		<div class="col-lg-8">
			<input class="form-control" id="txtTrabajador" name="txtTrabajador" type="text" autocomplete="off" autofocus="true" value=""/>
		</div>
	</div>
</div>

<div class="panel">
	<div class="panel-body">
		<div id="dvLista">
			
		</div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/usuarios/winCuentas.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>