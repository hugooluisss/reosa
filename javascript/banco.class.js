TBanco = function(){
	var self = this;
	
	this.add = function(rs){
		if (rs.fn.before !== undefined)
			rs.fn.before();
			
		$.post('cbancos', {
			"id": rs.idBanco,
			"clave": rs.clave,
			"nombre": rs.nombre,
			"razonsocial": rs.razonsocial,
			"action": "guardar"
		}, function(data){
			if (rs.fn.after != undefined)
				rs.fn.after(data);
				
			if (data.band == false){
				console.log("Ocurrió un error al guardar los datos");
			}
		}, "json");
	}
	
	this.del = function(rs){
		if (rs.fn.before !== undefined)
			rs.fn.before();
			
		$.post('cbancos', {
			"id": rs.id,
			"action": "del"
		}, function(data){
			if (rs.fn.after != undefined)
				rs.fn.after(data);
				
			if (data.band == false){
				console.log("No se pudo eliminar");
			}
		}, "json");
	}
};