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

				echo json_encode(array("band" => $obj->guardar()));
			break;
			case 'del':
				$obj = new TCliente($_POST['id']);
				echo json_encode(array("band" => $obj->eliminar()));
			break;
		}
	break;
}
?>