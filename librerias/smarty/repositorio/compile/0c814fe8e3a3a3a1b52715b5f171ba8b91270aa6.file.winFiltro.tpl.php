<?php /* Smarty version Smarty-3.1.11, created on 2017-03-03 13:07:42
         compiled from "templates/plantillas/modulos/nomina/winFiltro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5403104058ade03a057335-86238812%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c814fe8e3a3a3a1b52715b5f171ba8b91270aa6' => 
    array (
      0 => 'templates/plantillas/modulos/nomina/winFiltro.tpl',
      1 => 1488568057,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5403104058ade03a057335-86238812',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_58ade03a058be9_46084819',
  'variables' => 
  array (
    'plazas' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ade03a058be9_46084819')) {function content_58ade03a058be9_46084819($_smarty_tpl) {?><div class="modal fade" id="winFiltro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1>Filtro de selección</h1>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group">
						<label for="selAccion">Acción</label>
						<select id="selAccion" name="selAccion" class="form-control">
							<option value="S">Seleccionar</option>
							<option value="Q">Quitar selección</option>
						</select>
					</div>
					<hr />
					<div class="text-center text-success">
						A los trabajadores con las siguientes características
					</div>
					<div class="form-group">
						<label for="selSexo">Sexo</label>
						<select id="selSexo" name="selSexo" class="form-control">
							<option value="A">Hombre y Mujer</option>
							<option value="M">Hombre</option>
							<option value="F">Mujer</option>
						</select>
					</div>
					<div class="form-group">
						<label for="selPlaza">Plaza</label>
						<select id="selPlaza" name="selPlaza" class="form-control">
							<option value="--">----- Cualquiera -----</option>
							<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['plazas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value;?>
</option>
							<?php } ?>
						</select>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" id="btnEjecutar">Ejecutar</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div><?php }} ?>