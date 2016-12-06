<?php

require_once("clases/auth.php");
require_once("clases/validar.php");
require_once("clases/jsonRepository.php");
require_once("clases/mySQLRepository.php");
require_once("clases/usuario.php");

$tipoRepositorio = "mysql";
$repositorio = null;

if ($tipoRepositorio == "json")
{
	$repositorio = new JSONRepository();
}
else if ($tipoRepositorio == "mysql") {
	$repositorio = new MySQLRepository();
}

$auth = Auth::getInstance($repositorio->getUserRepository());
$validar = Validar::getInstance($repositorio->getUserRepository());

