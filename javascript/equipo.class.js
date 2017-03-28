TEquipo = function(){
	var self = this;
	
	this.add = function(datos){
		if (datos.fn.before !== undefined) datos.fn.before();
		
		$.post('cequipos', {
				"id": datos.id,
				"codigo": datos.codigo,
				"tipo": datos.tipo,
				"area": datos.area, 
				"marca": datos.marca,
				"modelo": datos.modelo,
				"capacidad": datos.capacidad,
				"cliente": datos.cliente,
				"action": "add"
			}, function(data){
				if (data.band == 'false')
					console.log(data.mensaje);
					
				if (datos.fn.after !== undefined)
					datos.fn.after(data);
			}, "json");
	};
	
	
	this.del = function(id, fn){
		$.post('cequipos', {
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