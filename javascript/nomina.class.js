TNomina = function(){
	var self = this;
	
	this.add = function(data){
		if (data.fn.before !== undefined) data.fn.before();
		
		$.post('cnomina', {
				"id": data.id, 
				"clave": data.clave,
				"inicio": data.inicio,
				"fin": data.fin,
				"tipo": data.tipo,
				"plazas": data.tipoPlaza,
				"pago": data.pago,
				"action": "guardar"
			}, function(resp){
				if (resp.band == 'false')
					console.log("No se pudo guardar");
					
				if (data.fn.after !== undefined)
					data.fn.after(resp);
			}, "json");
	};
	
	this.del = function(data){
		if (data.fn.before !== undefined) data.fn.before();
		
		$.post('cnomina', {
			"id": data.id,
			"action": "eliminar"
		}, function(resp){
			if (data.fn.after != undefined)
				data.fn.after(resp);
				
			if (resp.band == 'false'){
				console.log("Ocurrió un error al eliminar");
			}
		}, "json");
	};
	
	this.setEstado = function(data){
		if (data.fn.before !== undefined) data.fn.before();
		
		$.post('cnomina', {
			"nomina": data.nomina,
			"estado": data.estado,
			"action": "setEstado"
		}, function(resp){
			if (data.fn.after != undefined)
				data.fn.after(resp);
				
			if (resp.band == 'false'){
				console.log("Ocurrió un error al asignar el estado de la nómina");
			}
		}, "json");
	}
	
	this.setMontoCuentaTrabajador = function(data){
		if (data.fn.before !== undefined) data.fn.before();
		
		$.post('cnomina', {
			"movimiento": data.movimiento,
			"cuenta": data.cuenta,
			"monto": data.monto,
			"action": "setMontoCuentaTrabajador"
		}, function(resp){
			if (data.fn.after != undefined)
				data.fn.after(resp);
				
			if (resp.band == 'false'){
				console.log("Ocurrió un error al actualizar el monto de la cuenta");
			}
		}, "json");
	}
};