<?php
/**
* TOrden
* Orden de servicio
* @package aplicacion
* @autor Hugo Santiago hugooluisss@gmail.com
**/

class TOrden{
	private $idOrden;
	private $folio;
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
	private $limpiezaCarcasa;
	private $limpiezaPartesElectricas;
	private $limpiezaSerpentinCondensador;
	private $limpiezaSerpentinEvaporador;
	private $chequeoCargaRefrigerante;
	private $chequeoElectricoConexiones;
	private $succion;
	private $descarga;
	private $aceite;
	private $paroBaja;
	private $paroAlta;
	private $arranque;
	private $dentroCamara;
	private $aguaEntrada;
	private $aguaSalida;
	private $aireInyeccion;
	private $aireRetorno;
	private $ambiente;
	private $compresor;
	private $evaporador;
	private $condensador;
	
	/**
	* Constructor de la clase
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	*/
	public function TOrden($id = ''){
		global $userSesion;
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
	* Establece el número de folio o reporte
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setFolio($val = ''){
		$this->folio = $val;
		return true;
	}
	
	/**
	* Retorna el número de folio o reporte
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getFolio(){
		return $this->idOrden;
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
	* Establece el valor de la limpieza de carcasa
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setLimpiezaCarcasa($val = ''){
		$this->limpiezaCarcasa = $val;
		return true;
	}
	
	/**
	* Retorna el valor de la limpieza de carcasa
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getLimpiezaCarcasa(){
		return $this->limpiezaCarcasa;
	}
	
	/**
	* Establece el valor de la limpieza de partes eléctricas
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setLimpiezaPartesElectricas($val = ''){
		$this->limpiezaPartesElectricas = $val;
		return true;
	}
	
	/**
	* Retorna el valor de la limpieza de partes eléctricas
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getLimpiezaPartesElectricas(){
		return $this->limpiezaPartesElectricas;
	}
	
	/**
	* Establece el valor de la limpieza de Serpentin condensador
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setLimpiezaSerpentinCondensador($val = ''){
		$this->limpiezaSerpentinCondensador = $val;
		return true;
	}
	
	/**
	* Retorna el valor de la limpieza de serpentin condensador
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getLimpiezaSerpentinCondensador(){
		return $this->limpiezaSerpentinCondensador;
	}
	
	/**
	* Establece el valor de la limpieza de serpentin evaporador
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setLimpiezaSerpentinEvaporador($val = ''){
		$this->limpiezaSerpentinEvaporador = $val;
		return true;
	}
	
	/**
	* Retorna el valor de la limpieza de carcasa
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getLimpiezaSerpentinEvaporador(){
		return $this->limpiezaSerpentinEvaporador;
	}
	
	/**
	* Establece el valor del chequeo de la carga del refrigerante
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setChequeoCargaRefrigerante($val = ''){
		$this->chequeoCargaRefrigerante = $val;
		return true;
	}
	
	/**
	* Retorna el valor del chequeo de la carga del refrigerante
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getChequeoCargaRefrigerante(){
		return $this->chequeoCargaRefrigerante;
	}
	
	/**
	* Establece el valor del chequeo electrico de conexiones
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setChequeoElectricoConexiones($val = ''){
		$this->chequeoElectricoConexiones = $val;
		return true;
	}
	
	/**
	* Retorna el valor del chequeo electrico de conexiones
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getChequeoElectricoConexiones(){
		return $this->chequeoElectricoConexiones;
	}
	
	/**
	* Establece el valor de succion
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setSuccion($val = ''){
		$this->succion = $val;
		return true;
	}
	
	/**
	* Retorna el valor de succion
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getSuccion(){
		return $this->succion;
	}
	
	/**
	* Establece el valor de descarga
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setDescarga($val = ''){
		$this->descarga = $val;
		return true;
	}
	
	/**
	* Retorna el valor de descarga
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getDescarga(){
		return $this->descarga;
	}
	
	/**
	* Establece el valor de aceite
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setAceite($val = ''){
		$this->aceite = $val;
		return true;
	}
	
	/**
	* Retorna el valor de aceite
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getAceite(){
		return $this->aceite;
	}
	
	/**
	* Establece el valor de paro por baja
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setParoBaja($val = ''){
		$this->paroBaja = $val;
		return true;
	}
	
	/**
	* Retorna el valor de paro bajo
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getParoBaja(){
		return $this->paroBaja;
	}
	
	/**
	* Establece el valor de paro de alta
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setParoAlta($val = ''){
		$this->paroAlta = $val;
		return true;
	}
	
	/**
	* Retorna el valor de paro de Alta
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getParoAlta(){
		return $this->paroAlta;
	}
	
	/**
	* Establece el valor de arranque
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setArranque($val = ''){
		$this->arranque = $val;
		return true;
	}
	
	/**
	* Retorna el valor de arranque
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getArranque(){
		return $this->arranque;
	}
	
	/**
	* Establece el valor dentro de la cámara
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setDentroCamara($val = ''){
		$this->dentroCamara = $val;
		return true;
	}
	
	/**
	* Retorna el valor dentro de la cámara
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getDentroCamara(){
		return $this->dentroCamara;
	}
	
	/**
	* Establece el valor de agua a la entrada
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setAguaEntrada($val = ''){
		$this->aguaEntrada = $val;
		return true;
	}
	
	/**
	* Retorna el valor de agua a la entrada
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getAguaEntrada(){
		return $this->aguaEntrada;
	}
	
	/**
	* Establece el valor de agua a la salida
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setAguaSalida($val = ''){
		$this->aguaSalida = $val;
		return true;
	}
	
	/**
	* Retorna el valor de agua a la salida
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getAguaSalida(){
		return $this->aguaSalida;
	}
	
	/**
	* Establece el valor de aire de inyeccion
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setAireInyeccion($val = ''){
		$this->aireInyeccion = $val;
		return true;
	}
	
	/**
	* Retorna el valor de aire de inyeccion
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getAireInyeccion(){
		return $this->aireInyeccion;
	}
	
	/**
	* Establece el valor de aire de retorno
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setAireRetorno($val = ''){
		$this->aireRetorno = $val;
		return true;
	}
	
	/**
	* Retorna el valor de aire de retorno
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getAireRetorno(){
		return $this->aireRetorno;
	}
	
	/**
	* Establece el valor de ambiente
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setAmbiente($val = ''){
		$this->ambiente = $val;
		return true;
	}
	
	/**
	* Retorna el valor de ambiente
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getAmbiente(){
		return $this->ambiente;
	}
	
	/**
	* Establece el valor del compresor
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setCompresor($val = ''){
		$this->compresor = $val;
		return true;
	}
	
	/**
	* Retorna el valor del compresor
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getCompresor(){
		return $this->compresor;
	}
	
	/**
	* Establece el valor del evaporador
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setEvaporador($val = ''){
		$this->evaporador = $val;
		return true;
	}
	
	/**
	* Retorna el valor del evaporador
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getEvaporador(){
		return $this->evaporador;
	}
	
	/**
	* Establece el valor del condensador
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setCondensador($val = ''){
		$this->condensador = $val;
		return true;
	}
	
	/**
	* Retorna el valor del condensador
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getCondensador(){
		return $this->condensador;
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
		
		$sql = "UPDATE orden
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
				limpiezaCarcasa = '".$this->limpiezaCarcasa."',
				limpiezaPartesElectricas = '".$this->limpiezaPartesElectricas."',
				limpiezaSerpentinCondensador = '".$this->limpiezaSerpentinCondensador."',
				limpiezaSerpentinEvaporador = '".$this->limpiezaSerpentinEvaporador."',
				chequeoCargaRefrigerante = '".$this->chequeoCargaRefrigerante."',
				chequeoElectricoConexiones = '".$this->chequeoElectricoConexiones."',
				succion = '".$this->succion."', 
				descarga = '".$this->descarga."',
				aceite = '".$this->aceite."',
				paroBaja = '".$this->paroBaja."',
				paroAlta = '".$this->paroAlta."',
				arranque = '".$this->arranque."',
				dentroCamara = '".$this->dentroCamara."',
				aguaEntrada = '".$this->aguaEntrada."',
				aguaSalida = '".$this->aguaSalida."',
				aireInyeccion = '".$this->aireInyeccion."',
				aireRetorno = '".$this->aireRetorno."',
				ambiente = '".$this->ambiente."',
				compresor = '".$this->compresor."',
				evaporador = '".$this->evaporador."',
				condensador = '".$this->condensador."',
				folio = '".$this->getFolio()."'
			WHERE idOrden = ".$this->getId();
			
		$rs = $db->query($sql) or ErrorSistema($db->error." en ".$sql);
			
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
	
	/**
	* Retorna las fotografias
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function getFotos(){
		if ($this->getId() == '') return false;
		
		$db = TBase::conectaDB();
		$rs = $db->query("select * from fotografia where idOrden = ".$this->getId());
		$datos = array();
		
		while($row = $rs->fetch_assoc()){
			array_push($datos, new TFotografia($row['idFoto']));
		}
		
		return $datos;
	}
}
?>