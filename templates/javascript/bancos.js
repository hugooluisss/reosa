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
					url: "cbancos",
					type: "post",
					data: {
						action: "validarClave",
						banco: function(){
							return $("#id").val();
						}
					}
				}
			},			
			txtNombre: "required",
			txtRazonSocial: "required",
		},
		wrapper: 'span', 
		submitHandler: function(form){
			var obj = new TBanco;
			obj.add({
				idBanco: $("#id").val(), 
				clave: $("#txtClave").val(),
				nombre: $("#txtNombre").val(),
				razonsocial: $("#txtRazonSocial").val(),
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
		$.get("listaBancos", function( data ) {
			$("#dvLista").html(data);
			
			$("[action=modificar]").click(function(){
				var el = jQuery.parseJSON($(this).attr("datos"));
				
				$("#id").val(el.idBanco);
				$("#txtNombre").val(el.nombre);
				$("#txtClave").val(el.clave);
				$("#txtRazonSocial").val(el.razonsocial);
				
				$('#panelTabs a[href="#add"]').tab('show');
			});
			
			$("[action=eliminar]").click(function(){
				if(confirm("¿Seguro?")){
					var obj = new TBanco;
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