$(document).ready(function(){
	var lista = $("#winEquipos");
	
	$("#winEquipos").on("show.bs.modal", function(e){
		var cliente = jQuery.parseJSON(lista.attr("data"));
		
		$.post("listaEquipos", {
			"id": cliente.idCliente
		}, function(html){
			lista.find('.modal-body').html(html);
			
			$("#tblDatosEquipos").DataTable({
				"responsive": true,
				"language": espaniol,
				"paging": true,
				"lengthChange": false,
				"ordering": true,
				"info": true,
				"autoWidth": false
			});
			
			$("#btnAddEquipo").click(function(){
				$("#winAddEquipo").modal();
			});
		});
	});
	
	$("#winAddEquipo").on("show.bs.modal", function(e){
		lista.modal("hide");
		var cliente = jQuery.parseJSON(lista.attr("data"));
		$("#idCliente").val(cliente.idCliente);
	});
	
	$("#winAddEquipo").on("hidden.bs.modal", function(e){
		lista.modal();
		$("#frmAddEquipos").get(0).reset();
	});
	
	
	$("#frmAddEquipos").validate({
		debug: false,
		rules: {
			txtCodigo: {
				required: true,
				remote: {
					url: "cequipos",
					type: "post",
					data: {
						action: "validaCodigo",
						id: function(){
							return $("#id").val();
						}
					}
				}
			},
			txtTipo: "required"
		},
		wrapper: 'span', 
		submitHandler: function(form){
		
			var obj = new TEquipo;
			obj.add({
				id: $("#idEquipo").val(), 
				codigo: $("#txtCodigo").val(), 
				tipo: $("#txtTipo").val(),
				area: $("#txtArea").val(),
				marca: $("#txtMarca").val(),
				modelo: $("#txtModelo").val(),
				capacidad: $("#txtCapacidad").val(),
				cliente: $("#idCliente").val(),
				fn: {
					after: function(datos){
						if (datos.band){
							$("#winAddEquipos").modal("hide");
							$("#frmAddEquipo").get(0).reset();
						}else{
							alert("Upps... No se pudo guardar");
						}
					}
				}
			});
        }

    });
});