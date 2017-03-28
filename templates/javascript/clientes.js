$(document).ready(function(){
	getLista();
	
	$("#panelTabs li a[href=#add]").click(function(){
		$("#frmAdd").get(0).reset();
		$("#id").val("");
		$("form:not(.filter) :input:visible:enabled:first").focus();
	});
	
	$("#btnReset").click(function(){
		$('#panelTabs a[href="#listas"]').tab('show');
	});
	
	$("#frmAdd").validate({
		debug: true,
		rules: {
			txtNombre: "required",
			},
		wrapper: 'span', 
		submitHandler: function(form){
		
			var obj = new TCliente;
			obj.add({
				id: $("#id").val(), 
				nombre: $("#txtNombre").val(), 
				direccion: $("#txtDireccion").val(),
				ciudad: $("#txtCiudad").val(),
				colonia: $("#txtColonia").val(),
				fn: {
					after: function(datos){
						if (datos.band){
							getLista();
							$("#frmAdd").get(0).reset();
							$('#panelTabs a[href="#listas"]').tab('show');
						}else{
							alert("Upps... No se pudo guardar");
						}
					}
				}
			});
        }

    });
		
	function getLista(){
		$.get("?mod=listaClientes", function( data ) {
			$("#dvLista").html(data);
			
			$("[action=eliminar]").click(function(){
				if(confirm("¿Seguro?")){
					var obj = new TCliente;
					obj.del($(this).attr("identificador"), {
						after: function(data){
							getLista();
						}
					});
				}
			});
			
			$("[action=modificar]").click(function(){
				var el = jQuery.parseJSON($(this).attr("datos"));
				
				$("#id").val(el.idCliente);
				$("#txtNombre").val(el.nombre);
				$("#txtDireccion").val(el.direccion);
				$("#txtCiudad").val(el.ciudad);
				$("#txtColonia").val(el.colonia);
				$('#panelTabs a[href="#add"]').tab('show');
			});
			
			$("[action=equipos]").click(function(){
				var el = jQuery.parseJSON($(this).attr("datos"));
				
				$("#winEquipos").attr("data", $(this).attr("datos"));
				$("#winEquipos").modal();
				
			});
			
			$("#tblDatos").DataTable({
				"responsive": true,
				"language": espaniol,
				"paging": true,
				"lengthChange": false,
				"ordering": true,
				"info": true,
				"autoWidth": false
			});
		});
	}
});