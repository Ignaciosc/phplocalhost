<?php
require_once('usuarios.php');

function register(array $datos)
{
	if($errores = validateRegister($datos))
	{
		return $errores;
	}

	$datos['pass'] = password_hash($datos['pass'], PASSWORD_DEFAULT);
	$datos['fecha_nacimiento'] = implode('-', [
		$datos['anio'],
		$datos['mes'],
		$datos['dia']
	]);

	unset($datos['pass_confirm']);
	unset($datos['anio']);
	unset($datos['mes']);
	unset($datos['dia']);
	unset($datos['terminos']);

	guardarUsuario($datos);

	header('location: felicitaciones.php');
	exit;
}

function validateRegister($datos)
{
	$errores = [];

	$usuario = buscarUsuario('email', $datos['email']);
	if($usuario)
	{
		$errores['email'] = 'El email ya existe en nuestra base de datos';
	}

	$usuario = buscarUsuario('username', $datos['username']);
	if($usuario)
	{
		$errores['username'] = 'El username ya esta siendo utilizado';
	}

	return $errores;
}