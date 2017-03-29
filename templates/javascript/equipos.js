$(document).ready(function(){
	var lista = $("#winEquipos");
	
	function listarEquipos(){
		var cliente = jQuery.parseJSON(lista.attr("data"));
		
		$.post("listaEquipos", {
			"id": cliente.idCliente
		}, function(html){
			lista.find('.modal-body').html(html);
			
			$("#tblDatosEquipos").find("[action=modificar]").click(function(){
				var equipo = jQuery.parseJSON($(this).attr("datos"));
				
				$("#winAddEquipo").find("#idEquipo").val(equipo.idEquipo);
				$("#winAddEquipo").find("#txtCodigo").val(equipo.codigo);
				$("#winAddEquipo").find("#txtTipo").val(equipo.tipo);
				$("#winAddEquipo").find("#txtArea").val(equipo.area);
				$("#winAddEquipo").find("#txtMarca").val(equipo.marca);
				$("#winAddEquipo").find("#txtModelo").val(equipo.modelo);
				$("#winAddEquipo").find("#txtCapacidad").val(equipo.capacidad);
				
				$("#winAddEquipo").modal();
			});
			
			$("#tblDatosEquipos").find("[action=eliminar]").click(function(){
				var obj = new TEquipo;
				obj.del($(this).attr("identificador"), {
					before: function(){
						$(this).prop("disabled", true);
					}, after: function(resp){
						$(this).prop("disabled", true);
						if (resp.band)
							listarEquipos();
						else
							alert("No se pudo eliminar");
					}
				});
			});
			
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
	}
	
	$("#winEquipos").on("show.bs.modal", function(e){
		listarEquipos();
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
		debug: true,
		rules: {
			txtCodigo: {
				required: true,
				remote: {
					url: "cequipos",
					type: "post",
					data: {
						action: "validaCodigo",
						id: function(){
							return $("#idEquipo").val();
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
							$("#winAddEquipo").modal("hide");
							$("#frmAddEquipos").get(0).reset();
						}else{
							alert("Upps... No se pudo guardar");
						}
					}
				}
			});
        }

    });
});