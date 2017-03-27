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
			txtConcepto: "required"
		},
		wrapper: 'span', 
		submitHandler: function(form){
			var obj = new TCuenta;
			obj.add({
				id: $("#id").val(), 
				clave: $("#txtClave").val(),
				concepto: $("#txtConcepto").val(),
				sat: $("#selSAT").val(),
				tipo: $("#selTipo").val(),
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
		$.get("listaCuentas", function( data ) {
			$("#dvLista").html(data);
			
			$("[action=modificar]").click(function(){
				var el = jQuery.parseJSON($(this).attr("datos"));
				
				$("#id").val(el.idCuenta);
				$("#txtClave").val(el.clave);
				$("#txtConcepto").val(el.concepto);
				$("#selSAT").val(el.idSAT);
				$("#selTipo").val(el.tipoCuenta);
				
				$('#panelTabs a[href="#add"]').tab('show');
			});
			
			$("[action=eliminar]").click(function(){
				if(confirm("¿Seguro?")){
					var obj = new TCuenta;
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