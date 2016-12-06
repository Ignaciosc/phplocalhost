<?php
define('PASS_LEN', 6);

function validar(array $datos, $vatar)
{
	/* todo: Validar el avatar */

	$errores = [];

	if(trim($datos['nombre']) == '')
	{
		$errores['nombre'] = 'Debe ingresar Nombre';
	}

	if(trim($datos['apellido']) == '')
	{
		$errores['apellido'] = 'Debe ingresar Apellido';
	}

	if(!filter_var($datos['email'], FILTER_VALIDATE_EMAIL))
	{
		$errores['email'] = 'El email ingresado es inválido';
	}

	if(strlen($datos['pass']) < PASS_LEN)
	{
		$errores['pass'] = 'El password debe tener ' . PASS_LEN . ' o más caracteres';
	}
	elseif($datos['pass'] != $datos['pass_confirm'])
	{
		$errores['pass_confirm'] = 'El password debe ser igual a su confirmación';
	}

	if(strlen($datos['description']) < 20 || strlen($datos['description']) > 140)
	{
		$errores['description'] = 'LA descripción debe contener entre 20 y 140 caracteres';
	}

	if(!isset($datos['terminos']))
	{
		$errores['terminos'] = 'Debe aceptar los términos y condiciones';
	}

	if(!isset($datos['secciones']) || count($datos['secciones']) < 2)
	{
		$errores['secciones'] = 'Debe seleccionar al menos 2 secciones';
	}

	if($datos['dia'] == '' || $datos['mes'] == '' || $datos['anio'] == '' || !checkdate($datos['mes'], $datos['dia'], $datos['anio']))
	{
		$errores['fecha'] = 'La fecha es invalida';
	}

	return $errores;
}

function validarLogin(array $datos)
{
	$errores = [];

	if(!filter_var($datos['email'], FILTER_VALIDATE_EMAIL))
	{
		$errores['email'] = 'El email ingresado es inválido';
	}

	return $errores;
}