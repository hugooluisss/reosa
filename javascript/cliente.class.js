TCliente = function(){
	var self = this;
	
	this.add = function(datos){
		if (datos.fn.before !== undefined) datos.fn.before();
		
		$.post('cclientes', {
				"id": datos.id,
				"nombre": datos.nombre,
				"direccion": datos.direccion,
				"ciudad": datos.ciudad, 
				"colonia": datos.colonia,
				"correo": datos.correo,
				"action": "add"
			}, function(data){
				if (data.band == false)
					console.log(data.mensaje);
					
				if (datos.fn.after !== undefined)
					datos.fn.after(data);
			}, "json");
	};
	
	
	this.del = function(id, fn){
		if (fn.before != undefined)
			fn.before(data);
				
		$.post('cclientes', {
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
	
	this.getLista = function(fn){
		if (fn.before != undefined)
			fn.before();
			
		$.post('cclientes', {
			"action": "getLista"
		}, function(data){
			if (fn.after != undefined)
				fn.after(data);
		}, "json");
	}
};