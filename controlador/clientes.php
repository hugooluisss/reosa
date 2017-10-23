<?php
global $objModulo;
switch($objModulo->getId()){
	case 'listaClientes':
		$db = TBase::conectaDB();
		global $sesion;
		$rs = $db->query("select * from cliente where visible = true");
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$row['json'] = json_encode($row);
			
			array_push($datos, $row);
		}
		$smarty->assign("lista", $datos);
	break;
	case 'cclientes':
		switch($objModulo->getAction()){
			case 'add':
				$obj = new TCliente();
				
				$obj->setId($_POST['id']);
				$obj->setNombre($_POST['nombre']);
				$obj->setDireccion($_POST['direccion']);
				$obj->setCiudad($_POST['ciudad']);
				$obj->setColonia($_POST['colonia']);
				$obj->setCorreo($_POST['correo']);
				
				$smarty->assign("json", array("band" => $obj->guardar(), "identificador" =>$obj->getId()));
			break;
			case 'del':
				$obj = new TCliente($_POST['id']);
				$smarty->assign("json", array("band" => $obj->eliminar()));
			break;
			case 'getLista':
				$db = TBase::conectaDB();
				$rs = $db->query("select * from cliente where visible = true order by nombre");
				$datos = array();
				while($row = $rs->fetch_assoc()){
					$row['json'] = json_encode($row);
					
					array_push($datos, $row);
				}
				$smarty->assign("json", $datos);
			break;
		}
	break;
}
?>