<?php
global $conf;

$conf['reporte'] = array(
	'controlador' => 'reportes.php',
	'vista' => 'reportes/panel.tpl',
	'descripcion' => 'Ordenes',
	'seguridad' => true,
	'jsTemplate' => array('reportes.js'),
	'capa' => LAYOUT_DEFECTO);
	
$conf['creportes'] = array(
	'controlador' => 'reportes.php',
	'descripcion' => 'Controlador de reportes',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['listaOrdenesReportes'] = array(
	'controlador' => 'reportes.php',
	'vista' => 'reportes/lista.tpl',
	'descripcion' => 'Lista de ordenes en reportes',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
?>