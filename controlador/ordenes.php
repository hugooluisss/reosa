<?php
global $objModulo;
switch($objModulo->getId()){
	case 'listaOrdenes':
		$db = TBase::conectaDB();
		global $sesion;
		$rs = $db->query("select * from orden where visible = true");
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
				$obj->fecha($_POST['fecha']);
				$obj->solicitante($_POST['solicitante']);
				$obj->falla($_POST['falla']);
				$obj->servicio($_POST['servicio']);
				$obj->materiales($_POST['materiales']);
				$obj->comentarios($_POST['comentarios']);
				$obj->asignado($_POST['asignado']);
				
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