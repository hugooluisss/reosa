<?php /* Smarty version Smarty-3.1.11, created on 2017-03-23 11:55:16
         compiled from "templates/plantillas/modulos/nomina/construccion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:161707394558a49f6c5c2a77-16197933%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3db89f3fa74508bf784fd38e7a7253f611aacd55' => 
    array (
      0 => 'templates/plantillas/modulos/nomina/construccion.tpl',
      1 => 1490291422,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '161707394558a49f6c5c2a77-16197933',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_58a49f6c5ee116_25743903',
  'variables' => 
  array (
    'objNomina' => 0,
    'cuentas' => 0,
    'row' => 0,
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a49f6c5ee116_25743903')) {function content_58a49f6c5ee116_25743903($_smarty_tpl) {?><input type="hidden" id="nomina" name="nomina" value="<?php echo $_smarty_tpl->tpl_vars['objNomina']->value->getId();?>
" />
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header"><a href="nomina" class="btn-xs btn btn-danger" title="Regresar"><i class="fa fa-arrow-left" aria-hidden="true"></i> </a> Nómina <?php echo $_smarty_tpl->tpl_vars['objNomina']->value->getClave();?>
</h1>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<label>Mostrar concepto
			<select id="selCuenta" name="selCuenta" class="form-control">
				<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cuentas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['idCuenta'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['concepto'];?>
</option>
				<?php } ?>
			</select>
		</label>
		
		<button id="btnFiltro" type="button" class="btn btn-primary">Filtro avanzado</button>
		<button id="btnMasivo" class="btn btn-warning">Asignación masiva de monto</button>
		<button id="btnMasivoSDI" class="btn btn-warning">Asignación masiva de Sueldo DInt</button>
			
		</label>
	</div>
</div>

<div class="row">
	<div class="col-md-12" id="lstTrabajadores"></div>
</div>

<div class="row" id="divData">
	<div class="col-md-4">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Datos del trabajador</h3>
			</div>
			<div class="panel-body">
				<div class="col-xs-12 text-center"></div>
				<div class="input-group">
					<span class="input-group-addon"> </span>
					<input type="text" class="form-control input-sm" placeholder="Número de trabajador" title="Número de trabajador" readonly="true" disabled="true" campo="num_empleado">
				</div>
				<div class="input-group">
					<span class="input-group-addon"> </span>
					<input type="text" class="form-control input-sm" placeholder="Número personal" title="Número personal" readonly="true" disabled="true" campo="num_personal">
				</div>
				<div class="input-group">
					<span class="input-group-addon"> </span>
					<input type="text" class="form-control input-sm" placeholder="RFC" title="RFC" readonly="true" disabled="true" campo="rfc">
				</div>
				<div class="input-group">
					<span class="input-group-addon"> </span>
					<input type="text" class="form-control input-sm" placeholder="CURP" title="CURP" readonly="true" disabled="true" campo="curp">
				</div>
				<div class="input-group">
					<span class="input-group-addon"> </span>
					<input type="text" class="form-control input-sm" placeholder="Nombre" title="Nombre" readonly="true" disabled="true" campo="nombreCompleto">
				</div>
				<div class="input-group">
					<span class="input-group-addon"> </span>
					<input type="text" class="form-control input-sm" placeholder="Adscripción" title="Adscripción" readonly="true" disabled="true" campo="adscripcion">
				</div>
				<div class="input-group">
					<span class="input-group-addon"> </span>
					<input type="text" class="form-control input-sm" placeholder="Plaza" title="Plaza" readonly="true" disabled="true" campo="nombre_plaza">
				</div>
				<div class="input-group">
					<span class="input-group-addon"> </span>
					<textarea class="form-control input-sm" placeholder="Recibo" title="Recibo" readonly="true" disabled="true" campo="recibo" rows="7"></textarea>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-8">
		<div class="panel panel-danger">
			<div class="panel-heading">
				<h3 class="panel-title">Conceptos</h3>
			</div>
			<div class="panel-body" id="dvListaCuentas">
			</div>
		</div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/nomina/winFiltro.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>