<div class="modal fade" id="winFotografias" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
</div>