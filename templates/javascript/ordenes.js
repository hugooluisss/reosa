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
			selEquipo: "required",
			txtFecha: "required",
			selEstado: "required",
			txtSolicitante: "required"
		},
		wrapper: 'span',
		submitHandler: function(form){
			var obj = new TOrden;
			obj.add({
				"id": $("#id").val(),
				"estado": $("#selEstado").val(),
				"equipo": $("#selEquipo").val(),
				"fecha": $("#txtFecha").val(), 
				"solicitante": $("#txtSolicitante").val(),
				"falla": $("#txtFalla").val(),
				"servicio": $("#txtServicio").val(),
				"materiales": $("#txtMateriales").val(),
				"comentarios": $("#txtComentarios").val(),
				"asignado": $("#selAsignado").val(),
				fn:{
					after: function(datos){
						if (datos.band){
							getLista();
							$("#frmAdd").get(0).reset();
							$('#panelTabs a[href="#listas"]').tab('show');
						}else{
							alert("Upps... " + datos.mensaje);
						}
					}
				}
			});
        }

    });
		
	function getLista(){
		$.get("listaOrdenes", function( data ) {
			$("#dvLista").html(data);
			
			$("[action=eliminar]").click(function(){
				if(confirm("¿Seguro?")){
					var obj = new TOrden;
					obj.del($(this).attr("item"), {
						after: function(data){
							getLista();
						}
					});
				}
			});
			
			$("[action=modificar]").click(function(){
				var el = jQuery.parseJSON($(this).attr("datos"));
				
				$("#id").val(el.idEstado);
				$("#selEstado").val(el.idEstado);
				$("#selEquipo").val(el.idEquipo);
				$("#txtFecha").val(el.fecha);
				$("#selSolicitante").val(el.solicitante);
				$("#txtFalla").val(el.falla);
				$("#txtServicio").val(el.servicio);
				$("#txtMateriales").val(el.materiales);
				$("#txtComentarios").val(el.comentarios);
				$("#selAsignado").val(el.asignado);
				
				$('#panelTabs a[href="#add"]').tab('show');
			});
			
			$("#tblDatos").DataTable({
				"responsive": true,
				"language": espaniol,
				"paging": false,
				"lengthChange": false,
				"ordering": true,
				"info": true,
				"autoWidth": false
			});
		});
	};
});