<?php
global $conf;

$conf['clientes'] = array(
	'controlador' => 'clientes.php',
	'vista' => 'clientes/panel.tpl',
	'descripcion' => 'Administración de clientes',
	'seguridad' => true,
	'js' => array('cliente.class.js', 'equipo.class.js'),
	'jsTemplate' => array('clientes.js', 'equipos.js'),
	'capa' => LAYOUT_DEFECTO);

$conf['listaClientes'] = array(
	'controlador' => 'clientes.php',
	'vista' => 'clientes/lista.tpl',
	'descripcion' => 'Lista de clientes',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['cclientes'] = array(
	'controlador' => 'clientes.php',
	'descripcion' => 'Controlador de clientes',
	'seguridad' => true,
	'capa' => LAYOUT_JSON);
?>