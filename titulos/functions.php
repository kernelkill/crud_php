<?php
require_once('../config.php');
require_once(DBAPI);

$titulos = null;
$titulo = null;
/**
 *  Listagem de Clientes
 */
function index() {
	global $titulos;
	$titulos = find_all('customers');
}