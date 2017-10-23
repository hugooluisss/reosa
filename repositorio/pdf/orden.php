<?php
/*
 * Created on 11/02/2009
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
class ROrden extends tFPDF{
	private $orden;
	
	public function ROrden($id){
		$this->orden = new TOrden($id);
		
		parent::tFPDF('P', 'mm', array(187, 239));
		$this->AddFont('Sans','', 'DejaVuSans.ttf', true);
		$this->AddFont('Sans','B', 'DejaVuSans-Bold.ttf', true);
		$this->AddFont('Sans','U', 'DejaVuSans-Oblique.ttf', true);
		$this->AddFont('Sans','BU', 'DejaVuSans-BoldOblique.ttf', true);
		$this->cleanFiles();
		$this->SetAutoPageBreak(false, 0);
		//$this->formatoFondo = $formatoFondo;
		$this->AliasNbPages();
	}	
	
	public function AddPage(){
		parent::AddPage();
	}
	
	public function generar($id = ''){
		if ($id <> ''){
			$this->orden = new TOrden($id);
			$this->cliente = new TCliente($this->orden->equipo->getCliente());
		}
		$this->AddPage();
		
		$this->SetFont('Arial', 'B', 10);
		$this->SetXY(0, 0);
		$this->Image('repositorio/pdf/datos-orden.jpg', 0, 0, 190, 240);
		$this->SetFont('Arial', '', 8);
		
		$this->SetXY(12.5, 40);
		$this->Cell(20, 5, $this->orden->getId(), 0, 0, 'R');
		
		$fecha = explode("-", $this->orden->getFecha());
		$this->SetXY(157, 40);
		$this->Cell(5, 5, $fecha[2], 0, 0, 'R');
		$this->SetXY(164, 40);
		$this->Cell(5, 5, $fecha[1], 0, 0, 'R');
		$this->SetXY(169, 40);
		$this->Cell(10, 5, $fecha[0], 0, 0, 'R');
		
		$this->SetXY(23, 49); $this->Cell(70, 5, utf8_decode($this->cliente->getNombre()), 0, 0, 'L');
		$this->SetXY(115, 49); $this->Cell(65, 5, utf8_decode($this->cliente->getDireccion()), 0, 0, 'L');
		$this->SetXY(23, 53); $this->Cell(70, 5, utf8_decode($this->cliente->getCiudad()), 0, 0, 'L');
		$this->SetXY(110, 53); $this->Cell(75, 5, utf8_decode($this->cliente->getColonia()), 0, 0, 'L');
		
		$this->SetXY(60, 57); $this->Cell(120, 5, utf8_decode($this->orden->getSolicitante()), 0, 0, 'L');
		
		
		$this->SetXY(23, 66); $this->Cell(70, 5, utf8_decode($this->orden->getAsignado()), 0, 0, 'L');
		$this->SetXY(10, 75); $this->MultiCell(80, 4.5, utf8_decode($this->orden->getFalla()), 0, 'L');
		
		$this->SetXY(103, 67); $this->Cell(70, 5, $this->orden->equipo->getTipo(), 0, 0, 'L');
		$this->SetXY(103, 71.4); $this->Cell(70, 5, utf8_decode($this->orden->equipo->getArea()), 0, 0, 'L');
		$this->SetXY(106, 75.6); $this->Cell(70, 5, utf8_decode($this->orden->equipo->getMarca()), 0, 0, 'L');
		$this->SetXY(108, 80.1); $this->Cell(70, 5, utf8_decode($this->orden->equipo->getModelo()), 0, 0, 'L');
		$this->SetXY(110, 84); $this->Cell(70, 5, utf8_decode($this->orden->equipo->getCapacidad()), 0, 0, 'L');
		
		$this->SetXY(10, 93); $this->MultiCell(170, 4.5, utf8_decode($this->orden->getServicio()), 0, 'L');
		$this->SetDrawColor(0, 0, 0);
		$this->SetXY(77, 110); $this->Cell(8, 4, " ", 0, 0, 'C', $this->orden->getLimpiezaCarcasa() == 1);
		$this->SetXY(77, 114.5); $this->Cell(8, 4, " ", 0, 0, 'C', $this->orden->getLimpiezaPartesElectricas() == 1);
		$this->SetXY(77, 119); $this->Cell(8, 4, " ", 0, 0, 'C', $this->orden->getLimpiezaSerpentinCondensador() == 1);
		
		$this->SetXY(170.8, 110.3); $this->Cell(8, 4, " ", 0, 0, 'C', $this->orden->getLimpiezaSerpentinEvaporador() == 1);
		$this->SetXY(170.8, 114.8); $this->Cell(8, 4, " ", 0, 0, 'C', $this->orden->getChequeoCargaRefrigerante() == 1);
		$this->SetXY(170.8, 119.2); $this->Cell(8, 4, " ", 0, 0, 'C', $this->orden->getChequeoElectricoConexiones() == 1);
		
		$elemento = json_decode($this->orden->getCompresor());
		$y = 135.9;
		$this->SetXY(38, $y); $this->Cell(12, 4, $elemento->hp, 0, 0, 'R');
		$this->SetXY(51, $y); $this->Cell(12, 4, $elemento->fases, 0, 0, 'R');
		$this->SetXY(65, $y); $this->Cell(12, 4, $elemento->cantidad, 0, 0, 'R');
		$this->SetXY(77, $y); $this->Cell(23, 4, $elemento->placa, 0, 0, 'R');
		$this->SetXY(100, $y); $this->Cell(12, 4, $elemento->l1, 0, 0, 'R');
		$this->SetXY(113, $y); $this->Cell(12, 4, $elemento->l2, 0, 0, 'R');
		$this->SetXY(125, $y); $this->Cell(12, 4, $elemento->l3, 0, 0, 'R');
		$this->SetXY(138, $y); $this->Cell(12, 4, $elemento->l1l2, 0, 0, 'R');
		$this->SetXY(152, $y); $this->Cell(12, 4, $elemento->l1l3, 0, 0, 'R');
		$this->SetXY(166, $y); $this->Cell(12, 4, $elemento->l2l3, 0, 0, 'R');
		
		$elemento = json_decode($this->orden->getEvaporador());
		$y = 140;
		$this->SetXY(38, $y); $this->Cell(12, 4, $elemento->hp, 0, 0, 'R');
		$this->SetXY(51, $y); $this->Cell(12, 4, $elemento->fases, 0, 0, 'R');
		$this->SetXY(65, $y); $this->Cell(12, 4, $elemento->cantidad, 0, 0, 'R');
		$this->SetXY(77, $y); $this->Cell(23, 4, $elemento->placa, 0, 0, 'R');
		$this->SetXY(100, $y); $this->Cell(12, 4, $elemento->l1, 0, 0, 'R');
		$this->SetXY(113, $y); $this->Cell(12, 4, $elemento->l2, 0, 0, 'R');
		$this->SetXY(125, $y); $this->Cell(12, 4, $elemento->l3, 0, 0, 'R');
		$this->SetXY(138, $y); $this->Cell(12, 4, $elemento->l1l2, 0, 0, 'R');
		$this->SetXY(152, $y); $this->Cell(12, 4, $elemento->l1l3, 0, 0, 'R');
		$this->SetXY(166, $y); $this->Cell(12, 4, $elemento->l2l3, 0, 0, 'R');
		
		$elemento = json_decode($this->orden->getCondensador());
		$y = 144.4;
		$this->SetXY(38, $y); $this->Cell(12, 4, $elemento->hp, 0, 0, 'R');
		$this->SetXY(51, $y); $this->Cell(12, 4, $elemento->fases, 0, 0, 'R');
		$this->SetXY(65, $y); $this->Cell(12, 4, $elemento->cantidad, 0, 0, 'R');
		$this->SetXY(77, $y); $this->Cell(23, 4, $elemento->placa, 0, 0, 'R');
		$this->SetXY(100, $y); $this->Cell(12, 4, $elemento->l1, 0, 0, 'R');
		$this->SetXY(113, $y); $this->Cell(12, 4, $elemento->l2, 0, 0, 'R');
		$this->SetXY(125, $y); $this->Cell(12, 4, $elemento->l3, 0, 0, 'R');
		$this->SetXY(138, $y); $this->Cell(12, 4, $elemento->l1l2, 0, 0, 'R');
		$this->SetXY(152, $y); $this->Cell(12, 4, $elemento->l1l3, 0, 0, 'R');
		$this->SetXY(166, $y); $this->Cell(12, 4, $elemento->l2l3, 0, 0, 'R');
		
		$this->SetXY(39, 155); $this->Cell(25, 4, $this->orden->getSuccion(), 0, 0, 'R');
		$this->SetXY(39, 159.5); $this->Cell(25, 4, $this->orden->getDescarga(), 0, 0, 'R');
		$this->SetXY(39, 164); $this->Cell(25, 4, $this->orden->getAceite(), 0, 0, 'R');
		$this->SetXY(39, 168.5); $this->Cell(25, 4, $this->orden->getParoBaja(), 0, 0, 'R');
		$this->SetXY(39, 173); $this->Cell(25, 4, $this->orden->getParoAlta(), 0, 0, 'R');
		$this->SetXY(39, 177.5); $this->Cell(25, 4, $this->orden->getArranque(), 0, 0, 'R');
		
		$this->SetXY(153, 155.2); $this->Cell(25, 4, $this->orden->getDentroCamara(), 0, 0, 'R');
		$this->SetXY(153, 159.8); $this->Cell(25, 4, $this->orden->getAguaEntrada(), 0, 0, 'R');
		$this->SetXY(153, 164.2); $this->Cell(25, 4, $this->orden->getAguaSalida(), 0, 0, 'R');
		$this->SetXY(153, 168.7); $this->Cell(25, 4, $this->orden->getAireInyeccion(), 0, 0, 'R');
		$this->SetXY(153, 173); $this->Cell(25, 4, $this->orden->getAireRetorno(), 0, 0, 'R');
		$this->SetXY(153, 177.5); $this->Cell(25, 4, $this->orden->getAmbiente(), 0, 0, 'R');
		
		$this->SetXY(10, 188); $this->MultiCell(169, 4.5, utf8_decode($this->orden->getMateriales()), 0, 'L', 0);
		$this->SetXY(10, 203); $this->MultiCell(169, 4.5, utf8_decode($this->orden->getComentarios()), 0, 'L', 0);
		
		foreach($this->orden->getFotos() as $foto){
			$this->AddPage();
			$this->Image($foto->getNombre(), 10, 5, 170, 230);
		}
		
	}
		
	private function cleanFiles(){
    	$t = time();
    	$dir = "temporal";
    	$h = opendir($dir);
    	while($file=readdir($h)){
        	if(substr($file,0,3)=='tmp' && substr($file,-4)=='.pdf'){
            	$path = $dir.'/'.$file;
            	if($t-filemtime($path)>3600)
                	@unlink($path);
        	}
    	}
    	closedir($h);
	}
	
	public function Output(){
		$file = "temporal/".basename(tempnam("temporal/", 'tmp'));
		rename($file, $file.'.pdf');
		$file .= '.pdf';
		parent::Output($file, 'F');
		chmod($file, 0555);
		#header('Location: temporal/'.$file);
		
		return $file;
	}
}
?>