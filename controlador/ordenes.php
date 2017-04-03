<?php
global $objModulo;
switch($objModulo->getId()){
	case 'ordenes':
		$db = TBase::conectaDB();
		
		$rs = $db->query("select * from estado");
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$row['json'] = json_encode($row);
			
			array_push($datos, $row);
		}
		$smarty->assign("estados", $datos);
		
		$rs = $db->query("select concat(nombre, ' ', apellidos) as nombre from usuario where idTipo = 2 and visible = true");
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$row['json'] = json_encode($row);
			
			array_push($datos, $row);
		}
		$smarty->assign("vendedores", $datos);
	break;
	case 'listaOrdenes':
		$db = TBase::conectaDB();
		global $sesion;
		global $userSesion;
		
		if ($userSesion->getTipo() == 1)
			$sql = "select a.*, b.nombre as estado, b.color,
					d.nombre as cliente, c.idCliente
				from orden a join estado b using(idEstado)
					join equipo c using(idEquipo)
					join cliente d using(idCliente) 
				where a.visible = true";
		else
			$sql = "select a.*, b.nombre as estado, b.color,
					d.nombre as cliente, c.idCliente
				from orden a join estado b using(idEstado)
					join equipo c using(idEquipo)
					join cliente d using(idCliente) 
				where a.visible = true and idUsuario = ".$userSesion->getId();
			
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$row['json'] = json_encode($row);
			
			array_push($datos, $row);
		}
		$smarty->assign("lista", $datos);
	break;
	case 'cordenes':
		switch($objModulo->getAction()){
			case 'add':
				global $userSesion;
				$obj = new TOrden();
				
				$obj->setId($_POST['id']);
				$obj->equipo->setId($_POST['equipo']);
				$obj->estado->setId($_POST['estado']);
				$obj->setFecha(date("Y-m-d"));
				//$obj->setFolio($_POST['folio']);
				
				$obj->setSolicitante($_POST['solicitante']);
				$obj->setFalla($_POST['falla']);
				$obj->setServicio($_POST['servicio']);
				$obj->setMateriales($_POST['materiales']);
				$obj->setComentarios($_POST['comentarios']);
				if ($userSesion->getTipo() <> 1)
					$obj->setAsignado($userSesion->getNombreCompleto());
				else	
					$obj->setAsignado($_POST['asignado']);
					
				$obj->setLimpiezaCarcasa($_POST['limpiezaCarcasa']);
				$obj->setLimpiezaPartesElectricas($_POST['limpiezaPartesElectricas']);
				$obj->setLimpiezaSerpentinCondensador($_POST['limpiezaSerpentinCondensador']);
				$obj->setLimpiezaSerpentinEvaporador($_POST['limpiezaSerpentinEvaporador']);
				$obj->setChequeoCargaRefrigerante($_POST['chequeoCargaRefrigerante']);
				$obj->setChequeoElectricoConexiones($_POST['chequeoElectricoConexiones']);
				$obj->setSuccion($_POST['succion']);
				$obj->setDescarga($_POST['descarga']);
				$obj->setAceite($_POST['aceite']);
				$obj->setParoBaja($_POST['paroBaja']);
				$obj->setParoAlta($_POST['paroAlta']);
				$obj->setArranque($_POST['arranque']);
				$obj->setDentroCamara($_POST['dentroCamara']);
				$obj->setAguaEntrada($_POST['aguaEntrada']);
				$obj->setAguaSalida($_POST['aguaSalida']);
				$obj->setAireInyeccion($_POST['aireInyeccion']);
				$obj->setAireRetorno($_POST['aireRetorno']);
				$obj->setAmbiente($_POST['ambiente']);
				$obj->setCompresor(json_encode($_POST['compresor']));
				$obj->setEvaporador(json_encode($_POST['evaporador']));
				$obj->setCondensador(json_encode($_POST['condensador']));
				$band = $obj->guardar();
				$smarty->assign("json", array("band" => $band, "idOrden" => $obj->getId()));
			break;
			case 'del':
				$obj = new TOrden($_POST['id']);
				$smarty->assign("json", array("band" => $obj->eliminar()));
			break;
			case 'validaFolio':
				$db = TBase::conectaDB();
				$sql = "select idOrden from orden where folio = '".$_POST['txtFolio']."' and not idOrden = '".$_POST['id']."'";
				$rs = $db->query($sql) or errorMySQL($db, $sql);
				
				echo $rs->num_rows == 0?"true":"false";
			break;
		}
	break;
}
?>