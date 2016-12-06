<?php

require_once

function register(array $datos)
{
    $errores = [];

	if ($errores = validateRegister($datos)) {
		return $errores;
	}

    //chequear que el mail y el username no esten repetidos en el archivo.
    //levantar todos los usuarios

    $datos['pass'] = password_hash($datos['pass'], PASSWORD_DEFAULT);

    //YYYY-MM-DD
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

    //Obtener el ultimo Id

    //Agregar el nuevo usuario al array de usuarios
    //Re-encodear el array de usuarios
    //Guardar los datos


        header('location: felicitaciones.php');
        exit;

function validateRegister($datos) {
	$usuario = buscarUsuario('email', $datos['email']);
	if (usuario) {
		$errores['email'] = 'El email ya existe en nuestra base de datos';
	}

	$usuario = buscarUsuario('username', $datos['email']);
	if (usuario) {
		$errores['username'] = 'El username ya existe en nuestra base de datos';
	}

	if ($errores) {
		return $errores;
	}
}
