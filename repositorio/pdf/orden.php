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
		
		$this->SetXY(12.5, 10);
		$this->Cell(20, 5, $this->orden->getId(), 0, 0, 'R');
		
		$fecha = explode("-", $this->orden->getFecha());
		$this->SetXY(157, 10);
		$this->Cell(5, 5, $fecha[2], 0, 0, 'R');
		$this->SetXY(164, 10);
		$this->Cell(5, 5, $fecha[1], 0, 0, 'R');
		$this->SetXY(169, 10);
		$this->Cell(10, 5, $fecha[0], 0, 0, 'R');
		
		$this->SetXY(23, 19); $this->Cell(70, 5, $this->cliente->getNombre(), 0, 0, 'L');
		$this->SetXY(115, 19); $this->Cell(65, 5, $this->cliente->getDireccion(), 0, 0, 'L');
		$this->SetXY(23, 24); $this->Cell(70, 5, $this->cliente->getCiudad(), 0, 0, 'L');
		$this->SetXY(110, 24); $this->Cell(75, 5, $this->cliente->getColonia(), 0, 0, 'L');
		
		$this->SetXY(60, 29); $this->Cell(120, 5, $this->orden->getSolicitante(), 0, 0, 'L');
		
		
		$this->SetXY(23, 40); $this->Cell(70, 5, $this->orden->getAsignado(), 0, 0, 'L');
		$this->SetXY(10, 50); $this->MultiCell(80, 5, $this->orden->getFalla(), 0, 'L');
		
		
		$this->SetXY(103, 40); $this->Cell(70, 5, $this->orden->equipo->getTipo(), 0, 0, 'L');
		$this->SetXY(103, 45); $this->Cell(70, 5, $this->orden->equipo->getArea(), 0, 0, 'L');
		$this->SetXY(106, 50); $this->Cell(70, 5, $this->orden->equipo->getMarca(), 0, 0, 'L');
		$this->SetXY(108, 55); $this->Cell(70, 5, $this->orden->equipo->getModelo(), 0, 0, 'L');
		$this->SetXY(110, 60); $this->Cell(70, 5, $this->orden->equipo->getCapacidad(), 0, 0, 'L');
		
		$this->SetXY(10, 69); $this->MultiCell(170, 5, $this->orden->getServicio(), 0, 'L');
		$this->SetDrawColor(0, 0, 0);
		$this->SetXY(77, 90); $this->Cell(8, 4, " ", 0, 0, 'C', $this->orden->getLimpiezaCarcasa() == 1);
		$this->SetXY(77, 95); $this->Cell(8, 4, " ", 0, 0, 'C', $this->orden->getLimpiezaPartesElectricas() == 1);
		$this->SetXY(77, 100); $this->Cell(8, 4, " ", 0, 0, 'C', $this->orden->getLimpiezaSerpentinCondensador() == 1);
		
		$this->SetXY(170.8, 90); $this->Cell(8, 4, " ", 0, 0, 'C', $this->orden->getLimpiezaSerpentinEvaporador() == 1);
		$this->SetXY(170.8, 95); $this->Cell(8, 4, " ", 0, 0, 'C', $this->orden->getChequeoCargaRefrigerante() == 1);
		$this->SetXY(170.8, 100); $this->Cell(8, 4, " ", 0, 0, 'C', $this->orden->getChequeoElectricoConexiones() == 1);
		
		$elemento = json_decode($this->orden->getCompresor());
		$y = 118;
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
		$y = 123;
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
		$y = 128;
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
		
		$this->SetXY(39, 143); $this->Cell(25, 4, $this->orden->getSuccion(), 0, 0, 'R');
		$this->SetXY(39, 148); $this->Cell(25, 4, $this->orden->getDescarga(), 0, 0, 'R');
		$this->SetXY(39, 153); $this->Cell(25, 4, $this->orden->getAceite(), 0, 0, 'R');
		$this->SetXY(39, 158); $this->Cell(25, 4, $this->orden->getParoBaja(), 0, 0, 'R');
		$this->SetXY(39, 163); $this->Cell(25, 4, $this->orden->getParoAlta(), 0, 0, 'R');
		$this->SetXY(39, 168); $this->Cell(25, 4, $this->orden->getArranque(), 0, 0, 'R');
		
		$this->SetXY(153, 143); $this->Cell(25, 4, $this->orden->getDentroCamara(), 0, 0, 'R');
		$this->SetXY(153, 148); $this->Cell(25, 4, $this->orden->getAguaEntrada(), 0, 0, 'R');
		$this->SetXY(153, 153); $this->Cell(25, 4, $this->orden->getAguaSalida(), 0, 0, 'R');
		$this->SetXY(153, 158); $this->Cell(25, 4, $this->orden->getAireInyeccion(), 0, 0, 'R');
		$this->SetXY(153, 163); $this->Cell(25, 4, $this->orden->getAireRetorno(), 0, 0, 'R');
		$this->SetXY(153, 168); $this->Cell(25, 4, $this->orden->getAmbiente(), 0, 0, 'R');
		
		$this->SetXY(10, 180); $this->MultiCell(169, 5, $this->orden->getMateriales(), 0, 'L', 0);
		$this->SetXY(10, 197); $this->MultiCell(169, 5, $this->orden->getComentarios(), 0, 'L', 0);
		
		foreach($this->orden->getFotos() as $foto){
			$this->AddPage();
			$this->Image($foto->getNombre(), 10, 5);
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
		//header('Location: temporal/'.$file);
		
		return $file;
	}
}
?>