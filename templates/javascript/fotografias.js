$(document).ready(function(){
	$('#upload').fileupload({
		// This function is called when a file is added to the queue
		dataType: 'json',
		progressall: function (e, data) {
			//console.log(data);
			var progress = parseInt(data.loaded / data.total * 100, 10);
			$(".progress .progress-bar").css('width', progress + '%');
			
			if (progress < 100)
				$(".alert-danger").show();
			else
				$(".alert-danger").hide();
		},
		add: function (e, data) {
			console.log(data);
			var archivos = '';
			
			data.context = $('<p/>', {"class": "text-warning"}).html('<i class="fa fa-spinner fa-spin fa-2x fa-fw"></i> Subiendo <b>' + data.files[0].name + '</b> al servidor... <i class="fa fa-upload" aria-hidden="true"></i>').appendTo($("#historial"));
			
			data.submit();
        },
		fail: function(){
			alert("Ocurrió un problema en el servidor, contacta al administrador del sistema");
			
			console.log("Error en el servidor al subir el archivo, checa permisos de la carpeta repositorio");
		},
		done: function (e, data) {
            $.each(data.files, function (index, file) {
            	data.context.html('<i class="fa fa-2x fa-check-circle" aria-hidden="true"></i> ' + file.name + ' 100% arriba');
            	data.context.removeClass("text-warning");
            	data.context.addClass("text-success");
            });
            
            listaFotos();
        },
        complete: function(result, textStatus, jqXHR) {
        	//console.log(result);
        	result = jQuery.parseJSON(result.responseText);
        	
        	if (!result.status)
        		alert("Ocurrió un error al subir el archivo");
        	else
        		listaFotos();
        }
	});
	
	function listaFotos(){
		var orden = jQuery.parseJSON($("#winFotografias").attr("data"));
		
		$.post("listaFotos", {
			"id": orden.idOrden
		}, function(html){
			$("#dvListaFotografias").html(html);
						
			$("#tblFotos").find("[action=eliminar]").click(function(){
				if(confirm("¿Seguro?")){
					var obj = new TFotografia;
					obj.del($(this).attr("identificador"), {
						before: function(){
							$(this).prop("disabled", true);
						}, after: function(resp){
							$(this).prop("disabled", true);
							if (resp.band)
								listaFotos();
							else
								alert("No se pudo eliminar");
						}
					});
				}
			});
			
			$("#tblFotos").DataTable({
				"responsive": true,
				"language": espaniol,
				"paging": true,
				"lengthChange": false,
				"ordering": true,
				"info": true,
				"autoWidth": false
			});
		});
	}
	
	$("#winFotografias").on("show.bs.modal", function(e){
		var orden = jQuery.parseJSON($("#winFotografias").attr("data"));
		
		$("#orden").val(orden.idOrden);
		listaFotos();
	});
});