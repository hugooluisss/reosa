TOrden = function(){
	var self = this;
	
	this.add = function(datos){
		if (datos.fn.before !== undefined) datos.fn.before();
		
		$.post('cordenes', {
				"id": datos.id,
				"estado": datos.estado,
				"equipo": datos.equipo,
				"fecha": datos.fecha, 
				"folio": datos.folio, 
				"solicitante": datos.solicitante,
				"falla": datos.falla,
				"servicio": datos.servicio,
				"materiales": datos.materiales,
				"comentarios": datos.comentarios,
				"asignado": datos.asignado,
				"limpiezaCarcasa": datos.limpiezaCarcasa,
				"limpiezaPartesElectricas": datos.limpiezaPartesElectricas,
				"limpiezaSerpentinCondensador": datos.limpiezaSerpentinCondensador,
				"limpiezaSerpentinEvaporador": datos.limpiezaSerpentinEvaporador,
				"chequeoCargaRefrigerante": datos.chequeoCargaRefrigerante,
				"chequeoElectricoConexiones": datos.chequeoElectricoConexiones,
				"succion": datos.succion,
				"descarga": datos.descarga,
				"aceite": datos.aceite,
				"paroBaja": datos.paroBaja,
				"paroAlta": datos.paroAlta,
				"arranque": datos.arranque,
				"dentroCamara": datos.dentroCamara,
				"aguaEntrada": datos.aguaEntrada,
				"aguaSalida": datos.aguaSalida,
				"aireInyeccion": datos.aireInyeccion,
				"aireRetorno": datos.aireRetorno,
				"ambiente": datos.ambiente,
				"compresor": datos.compresor,
				"evaporador": datos.evaporador,
				"condensador": datos.condensador,
				"action": "add"
			}, function(data){
				if (data.band == 'false')
					console.log(data.mensaje);
					
				if (datos.fn.after !== undefined)
					datos.fn.after(data);
			}, "json");
	};
	
	
	this.del = function(id, fn){
		$.post('cordenes', {
			"id": id,
			"action": "del"
		}, function(data){
			if (fn.after != undefined)
				fn.after(data);
				
			if (data.band == false){
				console.log("Ocurrió un error al eliminar");
			}
		}, "json");
	};
};