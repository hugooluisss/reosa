<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Catálogo de clientes</h1>
	</div>
</div>

<ul id="panelTabs" class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#listas">Lista</a></li>
  <li><a data-toggle="tab" href="#add">Agregar o Modificar</a></li>
</ul>

<div class="tab-content">
	<div id="listas" class="tab-pane fade in active">
		<div id="dvLista">
			
		</div>
	</div>
	
	<div id="add" class="tab-pane fade">
		{include file=$PAGE.rutaModulos|cat:"modulos/clientes/add.tpl"}
	</div>
</div>

{include file=$PAGE.rutaModulos|cat:"modulos/equipos/winEquipos.tpl"}