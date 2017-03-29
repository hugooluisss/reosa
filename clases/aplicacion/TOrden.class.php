<?php
/**
* TOrden
* Orden de servicio
* @package aplicacion
* @autor Hugo Santiago hugooluisss@gmail.com
**/

class TOrden{
	private $idOrden;
	public $equipo;
	public $estado;
	public $usuario;
	private $fecha;
	private $solicitante;
	private $falla;
	private $servicio;
	private $materiales;
	private $comentarios;
	private $asignado;
	
	/**
	* Constructor de la clase
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	*/
	public function TOrden($id = ''){
		global $sesion;
		$this->estado = new TEstado(1);
		$this->equipo = new TEquipo();
		$this->usuario = new TUsuario($userSesion->getId());
		
		$this->setId($id);		
		return true;
	}
	
	/**
	* Carga los datos del objeto
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setId($id = ''){
		if ($id == '') return false;
		
		$db = TBase::conectaDB();
		$rs = $db->query("select * from orden where idOrden = ".$id);
		
		foreach($rs->fetch_assoc() as $field => $val){
			switch($field){
				case 'idEquipo':
					$this->equipo = new TEquipo($val);
				break;
				case 'idEstado':
					$this->estado = new TEstado($val);
				break;
				case 'idUsuario':
					$this->usuario = new TUsuario($val);
				break;
				default:
					$this->$field = $val;
			}
		}
		
		return true;
	}
	
	/**
	* Retorna el identificador del objeto
	*
	* @autor Hugo
	* @access public
	* @return integer identificador
	*/
	
	public function getId(){
		return $this->idOrden;
	}
	
	/**
	* Establece la fecha
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setFecha($val = ''){
		$this->fecha = $val == ''?date("Y-m-d"):$val;
		return true;
	}
	
	/**
	* Retorna la fecha
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getFecha(){
		return $this->fecha;
	}
	
	/**
	* Establece el nombre del solicitante
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setSolicitante($val = ''){
		$this->solicitante = $val;
		return true;
	}
	
	/**
	* Retorna el nombre del solicitante
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getSolicitante(){
		return $this->solicitante;
	}
	
	/**
	* Establece la descripción de la falla
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setFalla($val = ''){
		$this->falla = $val;
		return true;
	}
	
	/**
	* Retorna la descripción de la falla
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getFalla(){
		return $this->falla;
	}
	
	/**
	* Establece la descripción del servicio
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setServicio($val = ''){
		$this->servicio = $val;
		return true;
	}
	
	/**
	* Retorna la descripción del servicio
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getServicio(){
		return $this->servicio;
	}
	
	/**
	* Establece la descripción de los materiales
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setMateriales($val = ''){
		$this->materiales = $val;
		return true;
	}
	
	/**
	* Retorna la descripción de los materiales ocupados
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getMateriales(){
		return $this->materiales;
	}
	
	/**
	* Establece los comentarios
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setComentarios($val = ''){
		$this->comentarios = $val;
		return true;
	}
	
	/**
	* Retorna los comentarios
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getComentarios(){
		return $this->comentarios;
	}
	
	/**
	* Establece el nombre del usuario asignado
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setAsignado($val = ''){
		$this->asignado = $val;
		return true;
	}
	
	/**
	* Retorna el nombre del usuario asignado
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getAsignado(){
		return $this->asignado;
	}
				
	/**
	* Guarda los datos en la base de datos, si no existe un identificador entonces crea el objeto
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function guardar(){
		if ($this->equipo->getId() == '') return false;
		
		$db = TBase::conectaDB();
		
		if ($this->getId() == ''){
			$rs = $db->query("INSERT INTO orden(idEquipo, idEstado, idUsuario) VALUES(".$this->equipo->getId().", ".$this->estado->getId().", ".$this->usuario->getId().");");
			if (!$rs) return false;
				
			$this->idOrden = $db->insert_id;
		}

		if ($this->getId() == '')
			return false;
			
		$rs = $db->query("UPDATE orden
			SET
				idEstado = ".$this->estado->getId().",
				idEquipo = ".$this->equipo->getId().",
				fecha = '".$this->getFecha()."',
				solicitante = '".$this->getSolicitante()."',
				falla = '".$this->getFalla()."',
				servicio = '".$this->getServicio()."',
				materiales = '".$this->getMateriales()."',
				comentarios = '".$this->getComentarios()."',
				asignado = '".$this->getAsignado()."',
			WHERE idOrden = ".$this->getId());
			
		return $rs?true:false;
	}
	
	/**
	* Elimina el objeto de la base de datos
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function eliminar(){
		if ($this->getId() == '') return false;
		
		$db = TBase::conectaDB();
		$rs = $db->query("update orden set visible = false where idOrden = ".$this->getId());
		
		return $rs?true:false;
	}
}
?>