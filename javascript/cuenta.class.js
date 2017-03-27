TCuenta = function(){
	var self = this;
	
	this.add = function(rs){
		if (rs.fn.before !== undefined)
			rs.fn.before();
			
		$.post('ccuentas', {
			"id": rs.id,
			"sat": rs.sat,
			"clave": rs.clave,
			"concepto": rs.concepto,
			"tipo": rs.tipo,
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
			
		$.post('ccuentas', {
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