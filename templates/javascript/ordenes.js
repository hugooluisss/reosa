$(document).ready(function(){
	$("#txtFecha").datepicker();
	getLista();
	setListaClientes();
	
	$("#panelTabs li a[href=#add]").click(function(){
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
		setEquipos();
	});
	
	$("#frmAdd").validate({
		debug: true,
		rules: {
			selEquipo: "required",
			txtFecha: "required",
			selEstado: "required",
			txtSolicitante: "required",
			txtFallas: "required",
			txtServicio: "required",
			
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
				"falla": $("#txtFallas").val(),
				"servicio": $("#txtServicio").val(),
				"materiales": $("#txtMateriales").val(),
				"comentarios": $("#txtComentarios").val(),
				"asignado": $("#selAsignado").val(),
				
				"limpiezaCarcasa": $("#selLimpiezaCarcasa").val(),
				"limpiezaPartesElectricas": $("#selLimpiezaPartesElectricas").val(),
				"limpiezaSerpentinCondensador": $("#selLimpiezaSerpentinCondensador").val(),
				"limpiezaSerpentinEvaporador": $("#selLimpiezaSerpentinEvaporador").val(),
				"chequeoCargaRefrigerante": $("#selChequeoCargaRefrigerante").val(),
				"chequeoElectricoConexiones": $("#selChequeoElectricoConexiones").val(),
				
				"succion": $("#txtSuccion").val(),
				"descarga": $("#txtDescarga").val(),
				"aceite": $("#txtAceite").val(),
				"paroBaja": $("#txtParoBaja").val(),
				"paroAlta": $("#txtParoAlta").val(),
				"arranque": $("#txtArranque").val(),
				"dentroCamara": $("#txtDentroCamara").val(),
				"aguaEntrada": $("#txtAguaEntrada").val(),
				"aguaSalida": $("#txtAguaSalida").val(),
				"aireInyeccion": $("#txtAireInyeccion").val(),
				"aireRetorno": $("#txtAireRetorno").val(),
				"ambiente": $("#txtAmbiente").val(),
				
				"compresor": {
					"hp": $("#txtCompresorHP").val(),
					"fases": $("#txtCompresorFases").val(),
					"cantidad": $("#txtCompresorCantidad").val(),
					"placa": $("#txtCompresorAmp").val(),
					"l1": $("#txtCompresorL1").val(),
					"l2": $("#txtCompresorL2").val(),
					"l3": $("#txtCompresorL3").val(),
					"l1l2": $("#txtCompresorL1L2").val(),
					"l1l3": $("#txtCompresorL1L3").val(),
					"l2l3": $("#txtCompresorL2L3").val()
				},
				"evaporador": {
					"hp": $("#txtEvaporadorHP").val(),
					"fases": $("#txtEvaporadorFases").val(),
					"cantidad": $("#txtEvaporadorCantidad").val(),
					"placa": $("#txtEvaporadorAmp").val(),
					"l1": $("#txtEvaporadorL1").val(),
					"l2": $("#txtEvaporadorL2").val(),
					"l3": $("#txtEvaporadorL3").val(),
					"l1l2": $("#txtEvaporadorL1L2").val(),
					"l1l3": $("#txtEvaporadorL1L3").val(),
					"l2l3": $("#txtEvaporadorL2L3").val()
				},
				"condensador": {
					"hp": $("#txtCondensadorHP").val(),
					"fases": $("#txtCondensadorFases").val(),
					"cantidad": $("#txtCondensadorCantidad").val(),
					"placa": $("#txtCondensadorAmp").val(),
					"l1": $("#txtCondensadorL1").val(),
					"l2": $("#txtCondensadorL2").val(),
					"l3": $("#txtCondensadorL3").val(),
					"l1l2": $("#txtCondensadorL1L2").val(),
					"l1l3": $("#txtCondensadorL1L3").val(),
					"l2l3": $("#txtCondensadorL2L3").val()
				},
				fn:{
					after: function(datos){
						if (datos.band){
							getLista();
							$("#frmAdd").get(0).reset();
							$('#panelTabs a[href="#listas"]').tab('show');
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
			
			$("[action=modificar]").click(function(){
				var el = jQuery.parseJSON($(this).attr("datos"));
				
				$("#id").val(el.idEstado);
				$("#selEstado").val(el.idEstado);
				$("#selEquipo").val(el.idEquipo);
				$("#txtFecha").val(el.fecha);
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
	
	function setListaClientes(){
		var obj = new TCliente;
		obj.getLista({
			before: function(){
				$("#selCliente").find("option").remove();
			}, after: function(clientes){
				$.each(clientes, function(i, cliente){
					$("#selCliente").append($("<option />").val(cliente.idCliente).text(cliente.nombre));
					
					setEquipos();
				});
			}
		});
	}
	
	function setEquipos(){
		if ($("#selCliente").val() == '')
			console.log("No se puede obtener, se necesita un cliente");
		else
			var obj = new TEquipo;
			obj.getLista($("#selCliente").val(), {
				before: function(){
					$("#selEquipo").find("option").remove();
				}, after: function(equipos){
					$.each(equipos, function(i, equipo){
						$("#selEquipo").append($("<option />").val(equipo.idEquipo).text(equipo.codigo + " " + equipo.marca + " " + equipo.modelo));
					});
				}
			});
	}
});