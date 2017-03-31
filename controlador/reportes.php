<?php
global $objModulo;
switch($objModulo->getId()){
	case 'reporte':
		$db = TBase::conectaDB();
		$rs = $db->query("select * from estado") or errorMySQL($db, $sql);
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$row['json'] = json_encode($row);
			
			array_push($datos, $row);
		}
		
		$smarty->assign("estados", $datos);
	break;
	case 'listaOrdenesReportes':
		$db = TBase::conectaDB();
		global $userSesion;
		
		$estado = $_POST['estado'] == ''?"":(" and b.idEstado = ".$_POST['estado']);
		
		if ($userSesion->getTipo() == 1)
			$sql = "select a.*, b.nombre as estado, b.color,
					d.nombre as cliente
				from orden a join estado b using(idEstado)
					join equipo c using(idEquipo)
					join cliente d using(idCliente) 
				where a.visible = true".$estado;
		else
			$sql = "select a.*, b.nombre as estado, b.color,
					d.nombre as cliente
				from orden a join estado b using(idEstado)
					join equipo c using(idEquipo)
					join cliente d using(idCliente) 
				where a.visible = true and idUsuario = ".$userSesion->getId().$estado;
				
		$rs = $db->query($sql) or errorMySQL($db, $sql);
			
		$datos = array();
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$row['json'] = json_encode($row);
			
			array_push($datos, $row);
		}
		$smarty->assign("lista", $datos);
	break;
	case 'creportes':
		switch($objModulo->getAction()){
			case 'getResumen':
				$db = TBase::conectaDB();
				global $ini;
				$sql = "select * from estado";
				$rs = $db->query($sql);
				
				$datos = array();
				while($row = $rs->fetch_assoc()){
					if ($userSesion->getTipo() == 1)
						$sql = "select count(*) as total from orden where idEstado = ".$row['idEstado'];
					else
						$sql = "select count(*) as total from orden where idEstado = ".$row['idEstado']." and idUsuario = ".$userSesion->getId();
					$rs2 = $db->query($sql);
					
					$row2 = $rs2->fetch_assoc();
					$row['total'] = $row2['total'];
					
					array_push($datos, $row);
				}
				
				echo json_encode(array("estados" => $datos));
			break;
		}
	break;
}
?>