TUsuario = function(){
	var self = this;
	
	this.login = function(usuario, pass, fn){
		if (fn.before !== undefined)
			fn.before();
			
		$.post('clogin', {
			"usuario": usuario,
			"pass": pass,
			"action": "login"
		}, function(data){
			if (fn.after != undefined)
				fn.after(data);
				
			if (data.band == 'false'){
				console.log("Los datos del usuario no son válidos");
			}
		}, "json");
	}
	
	this.add = function(usuario, fn){
		if (fn.before !== undefined)
			fn.before();
			
		$.post('cusuarios', {
			"usuario": usuario,
			"action": "add"
		}, function(data){
			if (fn.after != undefined)
				fn.after(data);
				
			if (data.band == false){
				console.log("Los datos del usuario no son válidos");
			}
		}, "json");
	}
	
	this.del = function(usuario, fn){
		if (fn.before !== undefined)
			fn.before();
			
		$.post('cusuarios', {
			"usuario": usuario,
			"action": "del"
		}, function(data){
			if (fn.after != undefined)
				fn.after(data);
				
			if (data.band == false){
				console.log("Los datos del usuario no son válidos");
			}
		}, "json");
	}
	
	this.setPerfil = function(usuario, perfil, fn){
		if (fn.before !== undefined)
			fn.before();
			
		$.post('cusuarios', {
			"usuario": usuario,
			"perfil": perfil, 
			"action": "setPerfil"
		}, function(data){
			if (fn.after != undefined)
				fn.after(data);
				
			if (data.band == false){
				console.log("No se pudo asignar el perfil de usuario");
			}
		}, "json");
	}
	
	this.addCuenta = function(datos){
		if (datos.fn.before !== undefined)
			datos.fn.before();
			
		$.post('cusuarios', {
			"usuario": datos.usuario,
			"cuenta": datos.cuenta,
			"action": "addCuenta"
		}, function(data){
			if (datos.fn.after != undefined)
				datos.fn.after(data);
				
			if (data.band == false){
				console.log("No se pudo agregar la cuenta");
			}
		}, "json");
	}
	
	this.delCuenta = function(datos){
		if (datos.fn.before !== undefined)
			datos.fn.before();
			
		$.post('cusuarios', {
			"usuario": datos.usuario,
			"cuenta": datos.cuenta,
			"action": "delCuenta"
		}, function(data){
			if (datos.fn.after != undefined)
				datos.fn.after(data);
				
			if (data.band == false){
				console.log("No se pudo eliminar la cuenta");
			}
		}, "json");
	}
};