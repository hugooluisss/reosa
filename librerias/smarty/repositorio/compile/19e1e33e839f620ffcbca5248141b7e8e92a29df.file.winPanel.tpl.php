<?php /* Smarty version Smarty-3.1.11, created on 2017-04-04 20:30:02
         compiled from "templates/plantillas/modulos/fotos/winPanel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:122540508358de72f2369f45-29680537%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19e1e33e839f620ffcbca5248141b7e8e92a29df' => 
    array (
      0 => 'templates/plantillas/modulos/fotos/winPanel.tpl',
      1 => 1490990610,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122540508358de72f2369f45-29680537',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_58de72f236b722_65785727',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58de72f236b722_65785727')) {function content_58de72f236b722_65785727($_smarty_tpl) {?><div class="modal fade" id="winFotografias" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1>Fotografías</h1>
			</div>
			<div class="modal-body">
				<form id="upload" method="post" action="?mod=cfotos&action=add" enctype="multipart/form-data">
					<input type="hidden" id="orden" name="orden">
					<input type="file" name="upl" multiple />
					<ul class="elementos list-group">
					<!-- The file list will be shown here -->
					</ul>
				</form>
				<div class="row">
					<div class="col-xs-12" id="dvListaFotografias"></div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div><?php }} ?>