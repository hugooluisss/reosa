<?php
global $objModulo;
switch($objModulo->getId()){
	case 'listaFotos':
		$db = TBase::conectaDB();
		global $sesion;
		$rs = $db->query("select * from fotografia where idOrden = ".$_POST['id']);
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$row['json'] = json_encode($row);
			
			array_push($datos, $row);
		}
		$smarty->assign("lista", $datos);
	break;
	case 'cfotos':
		switch($objModulo->getAction()){
			case 'add':
				$result = array("status" => false);
				if(isset($_FILES['upl']) && $_FILES['upl']['error'] == 0){
					$ext = explode(".", $_FILES['upl']['name']);
					if (strtolower($ext[count($ext) -1]) == 'jpg'){
						$nombre = "repositorio/fotografias/img_".date("YmdHis")."_".rand(5, 15000).".jpg";
						if(move_uploaded_file($_FILES['upl']['tmp_name'], $nombre)){
							chmod($nombre, 0755);
							
							$obj = new TFotografia();
								
							$obj->setOrden($_POST['orden']);
							$obj->setNombre($nombre);
							
							$obj->guardar();
							
							$result = array("status" => true);
						}
					}
				}
				
				$smarty->assign("json", $result);
			break;
			case 'del':
				$obj = new TFotografia($_POST['id']);
				
				try{
					unlink($obj->getNombre());				
					$smarty->assign("json", array("band" => $obj->eliminar()));
				}catch(Exception $e){
					ErrorSistema($e->getMessage());
					
					$smarty->assign("json", array("band" => false));
				}
			break;
		}
	break;
}
?>