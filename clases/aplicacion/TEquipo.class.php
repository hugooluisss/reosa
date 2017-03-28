<?php
/**
* TEquipo
* Equipos de clientes
* @package aplicacion
* @autor Hugo Santiago hugooluisss@gmail.com
**/

class TEquipo{
	private $idEquipo;
	private $codigo;
	private $tipo;
	private $area;
	private $marca;
	private $modelo;
	private $capacidad;
	private $visible;
	private $idCliente;
	
	/**
	* Constructor de la clase
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	*/
	public function TEquipo($id = ''){
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
		$rs = $db->query("select * from equipo where idEquipo = ".$id);
		
		foreach($rs->fetch_assoc() as $field => $val)
				$this->$field = $val;
		
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
		return $this->idEquipo;
	}
	
	/**
	* Establece el codigo
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setCodigo($val = ''){
		$this->codigo = $val;
		return true;
	}
	
	/**
	* Retorna el codigo
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getCodigo(){
		return $this->codigo;
	}
	
	/**
	* Establece el tipo
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setTipo($val = ''){
		$this->tipo = $val;
		return true;
	}
	
	/**
	* Retorna el tipo
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getTipo(){
		return $this->tipo;
	}
	
	/**
	* Establece el area
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setArea($val = ''){
		$this->area = $val;
		return true;
	}
	
	/**
	* Retorna el area
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getArea(){
		return $this->area;
	}
	
	/**
	* Establece la marca
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setMarca($val = ''){
		$this->marca = $val;
		return true;
	}
	
	/**
	* Retorna la marca
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getMarca(){
		return $this->marca;
	}
	
	/**
	* Establece el modelo
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setModelo($val = ''){
		$this->modelo = $val;
		return true;
	}
	
	/**
	* Retorna el modelo
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getModelo(){
		return $this->modelo;
	}
	
	/**
	* Establece la capacidad
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setCapacidad($val = ''){
		$this->capacidad = $val;
		return true;
	}
	
	/**
	* Retorna la capacidad
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getCapacidad(){
		return $this->capacidad;
	}
	
	/**
	* Establece el identificador del cliente
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setCliente($val = ''){
		$this->idCliente = $val;
		return true;
	}
	
	/**
	* Retorna el identificador del cliente
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getCliente(){
		return $this->idCliente;
	}
	
	/**
	* Guarda los datos en la base de datos, si no existe un identificador entonces crea el objeto
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function guardar(){
		$db = TBase::conectaDB();
		
		if ($this->getId() == ''){
			$rs = $db->query("INSERT INTO equipo(idCliente, codigo) VALUES('".$this->getCliente()."', '".$this->getCodigo()."');");
			if (!$rs) return false;
				
			$this->idEquipo = $db->insert_id;
		}

		if ($this->getId() == '')
			return false;
			
		$rs = $db->query("UPDATE equipo
			SET
				codigo = '".$this->getCodigo()."',
				tipo = '".$this->getTipo()."',
				area = '".$this->getArea()."',
				marca = '".$this->getMarca()."',
				modelo = '".$this->getModelo()."',
				capacidad = '".$this->getCapacidad()."'
			WHERE idEquipo = ".$this->getId());
			
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
		$rs = $db->query("update equipo set visible = false where idEquipo = ".$this->getId());
		
		return $rs?true:false;
	}
}
?>