<?php
global $objModulo;
switch($objModulo->getId()){
	case 'listaEquipos':
		$db = TBase::conectaDB();
		global $sesion;
		$rs = $db->query("select * from equipo where idCliente = ".$_POST['id']." and visible = true");
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$row['json'] = json_encode($row);
			
			array_push($datos, $row);
		}
		$smarty->assign("lista", $datos);
	break;
	case 'cequipos':
		switch($objModulo->getAction()){
			case 'add':
				$obj = new TEquipo();
				
				$obj->setId($_POST['id']);
				
				if ($_POST['id'] == '')
					$obj->setCliente($_POST['cliente']);
					
				$obj->setCodigo($_POST['codigo']);
				$obj->setTipo($_POST['tipo']);
				$obj->setArea($_POST['area']);
				$obj->setMarca($_POST['marca']);
				$obj->setModelo($_POST['modelo']);
				$obj->setCapacidad($_POST['capacidad']);

				$smarty->assign("json", array("band" => $obj->guardar(), "identificador" => $obj->getId()));
			break;
			case 'del':
				$obj = new TEquipo($_POST['id']);
				$smarty->assign("json", array("band" => $obj->eliminar()));
			break;
			case 'validaCodigo':
				$db = TBase::conectaDB();
				$rs = $db->query("select idEquipo from equipo where codigo = '".$_POST['txtCodigo']."' and not idEquipo = '".$_POST['id']."'");
				
				echo $rs->num_rows == 0?"true":"false";
			break;
			case 'getLista':
				$db = TBase::conectaDB();
				$rs = $db->query("select * from equipo where idCliente = ".$_POST['cliente']." and visible = true order by codigo");
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