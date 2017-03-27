$(document).ready(function(){
	getLista();
	var table;
	
	var objNomina = new TNomina;
	
	$("#selCuenta").change(function(){
		getLista();
		
		$("#divData").find("[campo]").val("");
		$("#dvListaCuentas").html("");
		
		$("#divData").find(".panel-body").find("img").remove();
	});
	
	$("#btnMasivo").click(function(){
		var monto = prompt("Monto", "");
		
		if(isNaN(monto) || monto == null)
			alert("Es necesario que sea un valor númerico");
		else{
			var info = table.page.info();
			var search = $('div#tblDatos_wrapper input').val();
			table.page.len(-1).draw();
			table.search("").draw();
			var trabajadores = [];
			$('div#tblDatos_wrapper input[type=checkbox]:checked').each(function(){
				var trab = jQuery.parseJSON($(this).attr("datos"));
				trabajadores.push(trab.idMovimiento);
			});
			
			table.page.len(info.length);
			table.page(info.page);
			table.search(search).draw();
			
			$.post("cnomina", {
				"id": $("#nomina").val(),
				"cuenta": $("#selCuenta").val(),
				"movimientos": trabajadores,
				"monto": monto,
				"action": "setMontoMasivo"
			}, function(resp){
				$("#lstTrabajadores").html('<i class="fa fa-refresh fa-spin fa-3x fa-fw text-info"></i><span class="text-info">Iniciamos la asignación de monto masiva para la cuenta...</span>');
				
				if (resp.band)
					alert("Proceso terminado");
				else
					alert("Ocurrió un error, verifique la información");
					
				getLista();
			}, "json");
		}
	});
	
	$("#btnMasivoSDI").click(function(){
		var monto = prompt("Monto", "");
		
		if(isNaN(monto) || monto == null)
			alert("Es necesario que sea un valor númerico");
		else{
			var info = table.page.info();
			var search = $('div#tblDatos_wrapper input').val();
			table.page.len(-1).draw();
			table.search("").draw();
			var trabajadores = [];
			$('div#tblDatos_wrapper input[type=checkbox]:checked').each(function(){
				var trab = jQuery.parseJSON($(this).attr("datos"));
				trabajadores.push(trab.idMovimiento);
			});
			
			table.page.len(info.length);
			table.page(info.page);
			table.search(search).draw();
			
			$.post("cnomina", {
				"id": $("#nomina").val(),
				"cuenta": "SDI",
				"movimientos": trabajadores,
				"monto": monto,
				"action": "setMontoMasivo"
			}, function(resp){
				$("#lstTrabajadores").html('<i class="fa fa-refresh fa-spin fa-3x fa-fw text-info"></i><span class="text-info">Iniciamos la asignación de monto masiva para la cuenta...</span>');
				
				if (resp.band)
					alert("Proceso terminado");
				else
					alert("Ocurrió un error, verifique la información");
					
				getLista();
			}, "json");
		}
	});
	
	
	function getLista(){
		var textoBusqueda = (table != undefined)?table.search():"";
		$("#lstTrabajadores").html('<i class="fa fa-refresh fa-spin fa-3x fa-fw text-info"></i><span class="text-info">Actualizando...</span>');
		
		$.post("trabajadoresNomina", {
			"id": $("#nomina").val(),
			"cuenta": $("#selCuenta").val()
		},function(data) {
			$("#lstTrabajadores").html(data);
				
			$("#lstTrabajadores").find("[action=info]").click(function(){
				var trabajador = jQuery.parseJSON($(this).attr("datos"));
				
				$.each(trabajador, function(key, valor){
					$("[campo=" + key + "]").val(valor);
				});
				
				$("#divData").find(".panel-body").find("img").remove();
				
				if (trabajador.fotografia != undefined){
					$("#divData").find(".panel-body div").first().append($("<img />", {
						"src": trabajador.fotografia,
						"class": "img-thumbnail"
					}));
				}
				
				conceptosTrabajador(trabajador.idMovimiento);
				
				$('html, body').animate({scrollTop: $("#divData").offset().top}, 1000);
			});
			
			$("input.montoCuenta").change(function(){
				var el = $(this);
				objNomina.setMontoCuentaTrabajador({
					movimiento: el.attr("movimiento"),
					monto: el.val(),
					cuenta: el.attr("cuenta"),
					fn: {
						before: function(){
							el.prop("disabled", true);
						},
						after: function(resp){
							el.prop("disabled", false);
						}
					}
				});
			});
			
			$("#btnTodos").click(function(){
				var info = table.page.info();
				var search = $('div#tblDatos_wrapper input').val();
				table.page.len(-1).draw();
				table.search("").draw();
				$('div#tblDatos_wrapper input[type=checkbox]').prop("checked", true);
				
				table.page.len(info.length);
				table.page(info.page);
				table.search(search).draw();
			});
			
			$("#btnNinguno").click(function(){
				var info = table.page.info();
				var search = $('div#tblDatos_wrapper input').val();
				table.page.len(-1).draw();
				table.search("").draw();
				$('div#tblDatos_wrapper input[type=checkbox]').prop("checked", false);
				
				table.page.len(info.length);
				table.page(info.page);
				table.search(search).draw();
			});

								
			table = $("#tblDatos").DataTable({
				"responsive": true,
				"language": espaniol,
				"paging": true,
				"lengthChange": false,
				"ordering": true,
				"info": true,
				"autoWidth": false
			});
			
			if (table != undefined)
				table.search(textoBusqueda).draw();
		});
	}
	
	function conceptosTrabajador(movimiento){
		$("#dvListaCuentas").html('<i class="fa fa-refresh fa-spin fa-3x fa-fw text-info"></i><span class="text-info">Actualizando...</span>');
		
		$.post("listaCuentasTrabajadorNomina", {
			"id": movimiento
		},function(data) {
			$("#dvListaCuentas").html(data);
			
			$("#dvListaCuentas").find("#tblDatos").DataTable({
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
	
	$("#btnFiltro").click(function(){
		$("#winFiltro").modal();
	});
	
	$("#btnEjecutar").click(function(){
		var seleccion = $("#selAccion").val() == 'S';
		
		var info = table.page.info();
		var search = $('div#tblDatos_wrapper input').val();
		table.page.len(-1).draw();
		table.search("").draw();
		
		$('div#tblDatos_wrapper input[type=checkbox]').each(function(){
			var el = $(this);
			
			var band = true;
			switch($("#selSexo").val()){
				case 'M':
					if (el.attr("sexo") != 'M') band = false;
				break;
				case 'F':
					if (el.attr("sexo") != 'F') band = false;
				break;
			}
			
			if (band)
				if ($("#selPlaza").val() != '--'){
					if (el.attr('nombreTipoPlaza') != $("#selPlaza").val()) band = false;
				}
			
			
			if (band)
				el.prop("checked", seleccion);
		});
		
		table.page.len(info.length);
		table.page(info.page);
		table.search(search).draw();
		
		$("#winFiltro").modal("hide");
	});
});