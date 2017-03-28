<?php
global $conf;

$conf['listaEquipos'] = array(
	'controlador' => 'equipos.php',
	'vista' => 'equipos/lista.tpl',
	'descripcion' => 'Lista de equipos',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['cequipos'] = array(
	'controlador' => 'equipos.php',
	'descripcion' => 'Controlador de equipos',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
?>