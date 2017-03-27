$(document).ready(function(){
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
			txtClave: "required",
			txtInicio: "required",
			txtFin: "required",
			txtPago: "required"
		},
		wrapper: 'span', 
		submitHandler: function(form){
			var obj = new TNomina;
			obj.add({
				id: $("#id").val(), 
				clave: $("#txtClave").val(),
				tipo: $("#selTipo").val(),
				inicio: $("#txtInicio").val(),
				fin: $("#txtFin").val(),
				tipoPlaza: $("#selTipoPlaza").val(),
				fechaPago: $("#txtPago").val(),
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
	
	getLista();
		
	function getLista(){
		$.get("listaNominas", function(data) {
			$("#dvLista").html(data);
			
			$("[action=eliminar]").click(function(){
				if(confirm("¿Seguro?")){
					var obj = new TNomina;
					obj.del({
						"id": $(this).attr("identificador"), 
						fn: {
							after: function(data){
								getLista();
							}
						}
					});
				}
			});
			
			$("[action=construir]").click(function(){
				var el = jQuery.parseJSON($(this).attr("datos"));
				
				location.href = "construccion/" + el.idNomina + "-" + el.clave + "/";
			});
			
			$("[action=modificar]").click(function(){
				var el = jQuery.parseJSON($(this).attr("datos"));
				
				$("#id").val(el.idNomina);
				$("#txtClave").val(el.clave);
				$("#txtInicio").val(el.inicio);
				$("#txtFin").val(el.fin);
				$("#selTipo").val(el.idTipo);
				$("#txtPago").val(el.fechaPago);
				console.log("tipoplaza: " + el.tipoPlaza);
				
				$.each(el.tipoPlaza.split(","), function(i, plaza){
					$("#selTipoPlaza option[value='" + plaza + "']").prop("selected", true);
				});
				
				$('#panelTabs a[href="#add"]').tab('show');
			});
			
			$("[action=terminar]").click(function(){
				var el = jQuery.parseJSON($(this).attr("datos"));
				var btn = $(this);
				
				var obj = new TNomina;
				obj.setEstado({
					"estado": 'T',
					"nomina": el.idNomina,
					"fn": {
						before: function(){
							btn.prop("disabled", true);
						}, after: function(resp){
							btn.prop("disabled", false);
							if (resp.band == true)
								location.reload();
							else
								alert("No se pudo cambiar el estado de la nómina");
						}
					}
				});
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