$(document).ready(function(){
	$("#txtFecha").datepicker();
	getLista();
	
	$("#panelTabs li a[href=#add]").click(function(){
		setListaClientes();
		$("#frmAdd").get(0).reset();
		$("#id").val("");
		$("form:not(.filter) :input:visible:enabled:first").focus();
	});
	
	$("#btnReset").click(function(){
		$('#panelTabs a[href="#listas"]').tab('show');
	});
	
	$(".revision").change(function(){
		if ($(this).val() == '')
			$(this).val("0");
	});
	
	$("#selCliente").change(function(){
		if ($(this).val() == 'nuevo')
			$("#winClientes").modal();
		else
			setEquipos();
	});
	
	$("#selEquipo").change(function(){
		console.log("Cambio de seleccion de equipo", $(this).val());
		if ($(this).val() == 'nuevo')
			$("#winEquipo").modal();
	});
	
	var ventanaClientes = $("#winClientes");
	ventanaClientes.find("#frmAdd").validate({
		debug: true,
		rules: {
			txtNombre: "required",
			},
		wrapper: 'span', 
		submitHandler: function(form){
			var obj = new TCliente;
			obj.add({
				id: ventanaClientes.find("#id").val(), 
				nombre: ventanaClientes.find("#txtNombre").val(), 
				direccion: ventanaClientes.find("#txtDireccion").val(),
				ciudad: ventanaClientes.find("#txtCiudad").val(),
				colonia: ventanaClientes.find("#txtColonia").val(),
				fn: {
					after: function(datos){
						if (datos.band){
							ventanaClientes.modal("hide");
							$("#winEquipo").modal();
							setListaClientes(datos.identificador);
						}else{
							alert("Upps... No se pudo guardar");
						}
					}
				}
			});
        }

    });
	
	$("#winClientes").on("show.bs.modal", function(e){
		ventanaClientes.find("#frmAdd").get(0).reset();
		ventanaClientes.find("#txtNombre").focus();
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
				id: $("#frmAddEquipos").find("#idEquipo").val(), 
				codigo: $("#frmAddEquipos").find("#txtCodigo").val(), 
				tipo: $("#frmAddEquipos").find("#txtTipo").val(),
				area: $("#frmAddEquipos").find("#txtArea").val(),
				marca: $("#frmAddEquipos").find("#txtMarca").val(),
				modelo: $("#frmAddEquipos").find("#txtModelo").val(),
				capacidad: $("#frmAddEquipos").find("#txtCapacidad").val(),
				cliente: $("#selCliente").val(),
				fn: {
					after: function(datos){
						if (datos.band){
							$("#winEquipo").modal("hide");
							$("#frmAddEquipos").get(0).reset();
							
							setEquipos(datos.identificador);
						}else{
							alert("Upps... No se pudo guardar");
						}
					}
				}
			});
        }

    });
    
    $("#winEquipo").on("show.bs.modal", function(e){
		ventanaClientes.find("#frmAdd").get(0).reset();
		ventanaClientes.find("#txtNombre").focus();
	});
	
	$("#add").find("#frmAdd").validate({
		debug: true,
		onfocusout: true,
		rules: {
			selEquipo: "required",
			/*
			txtFolio: {
				required: true,
				remote: {
					url: "cordenes",
					type: "post",
					data: {
						action: "validaFolio",
						id: function(){
							return $("#id").val();
						}
					}
				}
			},*/
			selEstado: "required",
			txtSolicitante: "required",
			txtFallas: "required",
			txtServicio: "required",
			
		},
		wrapper: 'span',
		messages: {
			txtFolio: {
				remote: "Este número de reporte ya fue registrado"
			},
		},
		submitHandler: function(form){
			var obj = new TOrden;
			obj.add({
				"id": $("#add").find("#id").val(),
				"estado": $("#add").find("#selEstado").val(),
				"equipo": $("#add").find("#selEquipo").val(),
				"fecha": $("#add").find("#txtFecha").val(), 
				"folio": $("#add").find("#txtFolio").val(), 
				"solicitante": $("#add").find("#txtSolicitante").val(),
				"falla": $("#add").find("#txtFallas").val(),
				"servicio": $("#add").find("#txtServicio").val(),
				"materiales": $("#add").find("#txtMateriales").val(),
				"comentarios": $("#add").find("#txtComentarios").val(),
				"asignado": $("#add").find("#selAsignado").val(),
				
				"limpiezaCarcasa": $("#add").find("#selLimpiezaCarcasa").val(),
				"limpiezaPartesElectricas": $("#add").find("#selLimpiezaPartesElectricas").val(),
				"limpiezaSerpentinCondensador": $("#add").find("#selLimpiezaSerpentinCondensador").val(),
				"limpiezaSerpentinEvaporador": $("#add").find("#selLimpiezaSerpentinEvaporador").val(),
				"chequeoCargaRefrigerante": $("#add").find("#selChequeoCargaRefrigerante").val(),
				"chequeoElectricoConexiones": $("#add").find("#selChequeoElectricoConexiones").val(),
				
				"succion": $("#add").find("#txtSuccion").val(),
				"descarga": $("#add").find("#txtDescarga").val(),
				"aceite": $("#add").find("#txtAceite").val(),
				"paroBaja": $("#add").find("#txtParoBaja").val(),
				"paroAlta": $("#add").find("#txtParoAlta").val(),
				"arranque": $("#add").find("#txtArranque").val(),
				"dentroCamara": $("#add").find("#txtDentroCamara").val(),
				"aguaEntrada": $("#add").find("#txtAguaEntrada").val(),
				"aguaSalida": $("#add").find("#txtAguaSalida").val(),
				"aireInyeccion": $("#add").find("#txtAireInyeccion").val(),
				"aireRetorno": $("#add").find("#txtAireRetorno").val(),
				"ambiente": $("#add").find("#txtAmbiente").val(),
				
				"compresor": {
					"hp": $("#add").find("#txtCompresorHP").val(),
					"fases": $("#add").find("#txtCompresorFases").val(),
					"cantidad": $("#add").find("#txtCompresorCantidad").val(),
					"placa": $("#add").find("#txtCompresorAmp").val(),
					"l1": $("#add").find("#txtCompresorL1").val(),
					"l2": $("#add").find("#txtCompresorL2").val(),
					"l3": $("#add").find("#txtCompresorL3").val(),
					"l1l2": $("#add").find("#txtCompresorL1L2").val(),
					"l1l3": $("#add").find("#txtCompresorL1L3").val(),
					"l2l3": $("#add").find("#txtCompresorL2L3").val()
				},
				"evaporador": {
					"hp": $("#add").find("#txtEvaporadorHP").val(),
					"fases": $("#add").find("#txtEvaporadorFases").val(),
					"cantidad": $("#add").find("#txtEvaporadorCantidad").val(),
					"placa": $("#add").find("#txtEvaporadorAmp").val(),
					"l1": $("#add").find("#txtEvaporadorL1").val(),
					"l2": $("#add").find("#txtEvaporadorL2").val(),
					"l3": $("#add").find("#txtEvaporadorL3").val(),
					"l1l2": $("#add").find("#txtEvaporadorL1L2").val(),
					"l1l3": $("#add").find("#txtEvaporadorL1L3").val(),
					"l2l3": $("#add").find("#txtEvaporadorL2L3").val()
				},
				"condensador": {
					"hp": $("#add").find("#txtCondensadorHP").val(),
					"fases": $("#add").find("#txtCondensadorFases").val(),
					"cantidad": $("#add").find("#txtCondensadorCantidad").val(),
					"placa": $("#add").find("#txtCondensadorAmp").val(),
					"l1": $("#add").find("#txtCondensadorL1").val(),
					"l2": $("#add").find("#txtCondensadorL2").val(),
					"l3": $("#add").find("#txtCondensadorL3").val(),
					"l1l2": $("#add").find("#txtCondensadorL1L2").val(),
					"l1l3": $("#add").find("#txtCondensadorL1L3").val(),
					"l2l3": $("#add").find("#txtCondensadorL2L3").val()
				},
				fn:{
					after: function(datos){
						if (datos.band){
							getLista();
							$("#add").find("#frmAdd").get(0).reset();
							$('#panelTabs a[href="#listas"]').tab('show');
							
							$("#winFotografias").attr("data", JSON.stringify(datos));
							$("#winFotografias").modal();
						}else{
							alert("Upps... No se pudo guardar la orden");
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
			
			$("[action=fotos]").click(function(){
				$("#winFotografias").attr("data", $(this).attr("datos"));
				
				$("#winFotografias").modal();
			});
			
			$("[action=modificar]").click(function(){
				var el = jQuery.parseJSON($(this).attr("datos"));
				
				$("#id").val(el.idOrden);
				$("#selEstado").val(el.idEstado);
				setListaClientes(el.idCliente, el.idEquipo);
				
				$("#selCliente").val(el.idCliente);
				$("#selEquipo").val(el.idEquipo);
				$("#txtFecha").val(el.fecha);
				$("#txtFolio").val(el.idOrden);
				$("#txtSolicitante").val(el.solicitante);
				$("#txtFallas").val(el.falla);
				$("#txtServicio").val(el.servicio);
				$("#txtMateriales").val(el.materiales);
				$("#txtComentarios").val(el.comentarios);
				$("#selAsignado").val(el.asignado);
				
				$("#selLimpiezaCarcasa").val(el.limpiezaCarcasa);
				$("#selLimpiezaPartesElectricas").val(el.limpiezaPartesElectricas);
				$("#selLimpiezaSerpentinCondensador").val(el.limpiezaSerpentinCondensador)
				$("#selLimpiezaSerpentinEvaporador").val(el.limpiezaSerpentinEvaporador);
				$("#selChequeoCargaRefrigerante").val(el.chequeoCargaRefrigerante);
				$("#selChequeoElectricoConexiones").val(el.chequeoElectricoConexiones);
				$("#txtSuccion").val(el.succion);
				$("#txtDescarga").val(el.descarga);
				$("#txtAceite").val(el.aceite);
				$("#txtParoBaja").val(el.paroBaja);
				$("#txtParoAlta").val(el.paroAlta);
				$("#txtArranque").val(el.arranque);
				$("#txtDentroCamara").val(el.dentroCamara);
				$("#txtAguaEntrada").val(el.aguaEntrada);
				$("#txtAguaSalida").val(el.aguaSalida);
				$("#txtAireInyeccion").val(el.aireInyeccion);
				$("#txtAireRetorno").val(el.aireRetorno);
				$("#txtAmbiente").val(el.ambiente);
				
				try{
					var compresor = jQuery.parseJSON(el.compresor);
					$("#txtCompresorHP").val(compresor.hp);
					$("#txtCompresorFases").val(compresor.fases);
					$("#txtCompresorCantidad").val(compresor.cantidad);
					$("#txtCompresorAmp").val(compresor.placa);
					$("#txtCompresorL1").val(compresor.l1);
					$("#txtCompresorL2").val(compresor.l2);
					$("#txtCompresorL3").val(compresor.l3)
					$("#txtCompresorL1L2").val(compresor.l1l2);
					$("#txtCompresorL1L3").val(compresor.l1l3);
					$("#txtCompresorL2L3").val(compresor.l2l3);
				}catch(err){
					console.log("Compresor no era un JSON");
				}
				
				try{
					var evaporador = jQuery.parseJSON(el.evaporador);
					$("#txtEvaporadorHP").val(evaporador.hp);
					$("#txtEvaporadorFases").val(evaporador.fases);
					$("#txtEvaporadorCantidad").val(evaporador.cantidad);
					$("#txtEvaporadorAmp").val(evaporador.placa);
					$("#txtEvaporadorL1").val(evaporador.l1);
					$("#txtEvaporadorL2").val(evaporador.l2);
					$("#txtEvaporadorL3").val(evaporador.l3)
					$("#txtEvaporadorL1L2").val(evaporador.l1l2);
					$("#txtEvaporadorL1L3").val(evaporador.l1l3);
					$("#txtEvaporadorL2L3").val(evaporador.l2l3);
				}catch(err){
					console.log("Evaporador no era un JSON");
				}
				
				try{
					var condensador = jQuery.parseJSON(el.condensador);
					$("#txtCondensadorHP").val(condensador.hp);
					$("#txtCondensadorFases").val(condensador.fases);
					$("#txtCondensadorCantidad").val(condensador.cantidad);
					$("#txtCondensadorAmp").val(condensador.placa);
					$("#txtCondensadorL1").val(condensador.l1);
					$("#txtCondensadorL2").val(condensador.l2);
					$("#txtCondensadorL3").val(condensador.l3)
					$("#txtCondensadorL1L2").val(condensador.l1l2);
					$("#txtCondensadorL1L3").val(condensador.l1l3);
					$("#txtCondensadorL2L3").val(condensador.l2l3);
				}catch(e){
					console.log("Condensador no era un JSON");
				}
				
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
	
	function setListaClientes(identificador, equipo){
		var obj = new TCliente;
		console.log("Cliente seleccionado", identificador);
		obj.getLista({
			before: function(){
				$("#selCliente").find("option").remove();
			}, after: function(clientes){
				$("#selCliente").append($("<option />").val("").text("Seleccciona"));
				$("#selCliente").append($("<option />").val("nuevo").text("Nuevo cliente"));
				
				$.each(clientes, function(i, cliente){
					$("#selCliente").append($("<option />").val(cliente.idCliente).text(cliente.nombre));
				});
				if (identificador != undefined)
					$("#selCliente").val(identificador);
				else
					$("#selCliente").val("");
				console.log("Equipo seleccionado", equipo);
				setEquipos(equipo);
			}
		});
	}
	
	function setEquipos(equipo){
		if ($("#selCliente").val() == '' || $("#selCliente").val() == 'nuevo')
			console.log("No se puede obtener, se necesita un cliente");
		else{
			var obj = new TEquipo;
			obj.getLista($("#selCliente").val(), {
				before: function(){
					$("#selEquipo").find("option").remove();
				}, after: function(equipos){
					$("#selEquipo").append($("<option />").val("").text("Seleccciona"));
					$("#selEquipo").append($("<option />").val("nuevo").text("Nuevo equipo"));
					
					$.each(equipos, function(i, equipo){
						$("#selEquipo").append($("<option />").val(equipo.idEquipo).text(equipo.codigo + " " + equipo.marca + " " + equipo.modelo));
					});
					
					if (equipo != undefined)
						$("#selEquipo").val(equipo);
				}
			});
		}
	}
});