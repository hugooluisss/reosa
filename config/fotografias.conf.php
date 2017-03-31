<?php
global $conf;

$conf['listaFotos'] = array(
	'controlador' => 'fotografias.php',
	'vista' => 'fotos/lista.tpl',
	'descripcion' => 'Lista de equipos',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['cfotos'] = array(
	'controlador' => 'fotografias.php',
	'descripcion' => 'Controlador de equipos',
	'seguridad' => true,
	'capa' => LAYOUT_JSON);
?>