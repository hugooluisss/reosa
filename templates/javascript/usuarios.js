var tblCuentas;
$(document).ready(function(){
	getLista();
	
	$("#txtTrabajador").autocomplete({
		source: "index.php?mod=cusuarios&action=autocomplete",
		minLength: 2,
		select: function(e, el){
			var obj = new TUsuario;
			var band = true;
			
			if (!el.item.nip)
				band = confirm("Este trabajador no tiene NIP asignado, no tendrá acceso al sistema, ¿aún así deseas agregarlo?");
			
			if (band)
				obj.add(el.item.identificador, {
					after: function(data){
						if(!data.band)
							alert("Upps No se agregó el usuario");
						else
							getLista();
							
						$("#txtTrabajador").val("");
					}
				});
					
		}
	});
		
	function getLista(){
		$.get("?mod=listaUsuarios", function( data ) {
			$("#dvLista").html(data);
			
			$("[action=eliminar]").click(function(){
				if(confirm("¿Seguro?")){
					var obj = new TUsuario;
					obj.del($(this).attr("usuario"), {
						after: function(data){
							getLista();
						}
					});
				}
			});
			
			$(".setPerfil").change(function(){
				var el = $(this);
				
				var obj = new TUsuario;
				obj.setPerfil($(this).attr("usuario"), $(this).val(), {
					before: function(){
						el.prop("disabled", true);
					},
					after: function(data){
						el.prop("disabled", false);
						
						if (data.band == false)
							alert("No se pudo hacer el cambio de perfil");
						else
							getLista();
					}
				});
			});
			
			$("[action=setCuentas]").click(function(){
				var el = jQuery.parseJSON($(this).attr("datos"));
				var info = tblCuentas.page.info();
				
				tblCuentas.page.len(-1).draw();
				tblCuentas.search("").draw();
				
				$.each(el.cuentas, function(i, cuenta){
					$("input[cuenta=" + cuenta + "]").prop("checked", true);
				});
				
				tblCuentas.page.len(info.length);
				tblCuentas.page(info.page);
				tblCuentas.draw();
				$("#winCuentas").attr("usuario", el.num_personal);
				$("#winCuentas").modal();
				
			});
				
			$("#tblUsuarios").DataTable({
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
	
	$(".cuenta").change(function(){
		var el = $(this);
		var obj = new TUsuario;
		if (el.is(':checked'))
			obj.addCuenta({
				"usuario": $("#winCuentas").attr("usuario"),
				"cuenta": el.val(),
				"fn": {
					before: function(){
						el.prop("disabled", true);
					},after: function(resp){
						el.prop("disabled", false);
						if (!resp.band)
							alert("No se pudo agregar la cuenta");
					}
				}
			});
		else
			obj.delCuenta({
				"usuario": $("#winCuentas").attr("usuario"),
				"cuenta": el.val(),
				"fn": {
					before: function(){
						el.prop("disabled", true);
					},after: function(resp){
						el.prop("disabled", false);
						if (!resp.band)
							alert("No se pudo quitar la cuenta");
					}
				}
			});
			
	});
	
	tblCuentas = $("#tblCuentas").DataTable({
		"responsive": true,
		"language": espaniol,
		"paging": true,
		"lengthChange": false,
		"ordering": true,
		"info": true,
		"autoWidth": false
	});
});