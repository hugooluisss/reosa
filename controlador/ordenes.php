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
	break;
	case 'listaOrdenes':
		$db = TBase::conectaDB();
		global $sesion;
		$sql = "select a.*, b.nombre as estado, b.color,
				d.nombre as cliente
			from orden a join estado b using(idEstado)
				join equipo c using(idEquipo)
				join cliente d using(idCliente) 
			where a.visible = true";
			
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
				$obj = new TOrden();
				
				$obj->setId($_POST['id']);
				$obj->equipo->setId($_POST['equipo']);
				$obj->estado->setId($_POST['estado']);
				$obj->setFecha($_POST['fecha']);
				$obj->setSolicitante($_POST['solicitante']);
				$obj->setFalla($_POST['falla']);
				$obj->setServicio($_POST['servicio']);
				$obj->setMateriales($_POST['materiales']);
				$obj->setComentarios($_POST['comentarios']);
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
				$obj->setArranque($_POST['paroArranque']);
				$obj->setDentroCamara($_POST['dentroCamara']);
				$obj->setAguaEntrada($_POST['aguaEntrada']);
				$obj->setAguaSalida($_POST['aguaSalida']);
				$obj->setAireInyeccion($_POST['aireInyeccion']);
				$obj->setAireRetorno($_POST['aireRetorno']);
				$obj->setAmbiente($_POST['ambiente']);
				$obj->setCompresor(json_encode($_POST['compresor']));
				$obj->setEvaporador(json_encode($_POST['evaporador']));
				$obj->setCondensador(json_encode($_POST['condensador']));
				
				$smarty->assign("json", array("band" => $obj->guardar()));
			break;
			case 'del':
				$obj = new TOrden($_POST['id']);
				$smarty->assign("json", array("band" => $obj->eliminar()));
			break;
		}
	break;
}
?>