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
			txtClave: {
				required: true,
				remote: {
					url: "cregimen",
					type: "post",
					data: {
						action: "validarClave",
						identificador: function(){
							return $("#id").val();
						}
					}
				}
			},			
			txtDescripcion: "required"
		},
		wrapper: 'span', 
		submitHandler: function(form){
			var obj = new TRegimen;
			obj.add({
				id: $("#id").val(), 
				clave: $("#txtClave").val(),
				descripcion: $("#txtDescripcion").val(),
				fn:	{
					before: function(){
						$(form).find("[type=submit]").prop("disabled", true);
					},
					after: function(resp){
						$(form).find("[type=submit]").prop("disabled", false);
						if (resp.band){
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
		$.get("listaRegimen", function( data ) {
			$("#dvLista").html(data);
			
			$("[action=modificar]").click(function(){
				var el = jQuery.parseJSON($(this).attr("datos"));
				
				$("#id").val(el.idRegimen);
				$("#txtClave").val(el.clave);
				$("#txtDescripcion").val(el.descripcion);
				
				$('#panelTabs a[href="#add"]').tab('show');
			});
			
			$("[action=eliminar]").click(function(){
				if(confirm("¿Seguro?")){
					var obj = new TRegimen;
					var el = $(this);
					
					console.info(el.attr("identificador"));
					
					obj.del({
						"id": el.attr("identificador"), 
						"fn": {
							after: function(data){
								if (data.band)
									getLista();
								else
									alert("No se pudo eliminar el registro");
							}
						}
					});
				}
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