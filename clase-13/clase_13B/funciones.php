<?php
require_once('requires.php');

define('SESSION_USER_KEY', 'usuario');
define('COOKIE_USUARIO', 'mi_sitio_logged_user');

autologuear();

function saveAvatar($filename = null)
{
	uploadSingleFile('avatar', AVATARS_DIRECTORY, $filename);
}

function register(array $datos, $avatar)
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

	$user = guardarUsuario($datos);
	saveAvatar($user);

	header('location: login.php');
	exit;
}

function validateRegister($datos)
{
	$errores = [];

	$usuario = getByEmail($datos['email']);
	if($usuario)
	{
		$errores['email'] = 'El email ya existe en nuestra base de datos';
	}

	// $usuario = buscarUsuario('username', $datos['username']);
	// if($usuario)
	// {
	// 	$errores['username'] = 'El username ya esta siendo utilizado';
	// }

	return $errores;
}

function loguearUsuario(array $datos)
{
	$errores = [];

	$user = buscarUsuario('email', $datos['email']);

	if($user)
	{
		if(password_verify($datos['pass'], $user['pass']))
		{
			unset($user['pass']);
			writeInSession($user);

			if(isset($datos['recordarme']))
			{
				setcookie(COOKIE_USUARIO, $user['id'], time() + 60*60*24*30);
			}

			header('location: index.php');
			exit;
		}
		else
		{
			$errores['pass'] = 'El password esta mal';
		}
	}
	else
	{
		$errores['email'] = 'El email ingresado no existe';
	}

	return $errores;
}

function autologuear()
{
	if(!isset($_SESSION[SESSION_USER_KEY]))
	{
		if(isset($_COOKIE[COOKIE_USUARIO]))
		{
			$idUsuario = $_COOKIE[COOKIE_USUARIO];
			$user = buscarUsuario('id', $idUsuario);

			unset($user['pass']);
			writeInSession($user);
		}
	}
}

function logout()
{
	session_destroy();
	setcookie(COOKIE_USUARIO, '', time() - 1);

	header('location: index.php');
	exit;
}

function writeInSession(array $user)
{
	$_SESSION[SESSION_USER_KEY] = $user;
}
