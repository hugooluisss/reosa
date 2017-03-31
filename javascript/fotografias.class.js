TFotografia = function(){
	var self = this;
	
	this.del = function(id, fn){
		$.post('cfotos', {
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