<?php
require_once('requires.php');

define('USERS_FILE', 'usuarios.json');

function getByEmail($email) {
	$repo = new UserDatabaseRepository();

	return $repo->getByEmail($email);
}

function guardarUsuario($datos){
	$user = new User(
	$datos['nombre'],
	$datos['apellido'],
	$datos['email'],
	$datos['username'],
	$datos['pass']
);

	$user->setBirthDate($datos['fecha_nacimiento']);
	$user->setBio($datos['description']);

	$repo = new UserDatabaseRepository();
	$repo->save($user);

	return $user;
}

// function obtenerUsuarios()
// {
// 	if(!file_exists(USERS_FILE))
// 	{
// 		$f = fopen(USERS_FILE, 'w+');
// 		fwrite($f, json_encode(['usuarios' => []]));
// 		fclose($f);
// 	}
//
// 	$users = file_get_contents(USERS_FILE);
// 	$users = json_decode($users, true);
//
// 	return $users['usuarios'];
// }
//
// function buscarUsuario($atributo, $valor)
// {
// 	$users = obtenerUsuarios();
//
// 	foreach($users as $user)
// 	{
// 		if($user[$atributo] == $valor)
// 		{
// 			return $user;
// 		}
// 	}
//
// 	return null;
// }
//
// function guardarUsuario($datos)
// {
// 	$users = obtenerUsuarios();
//
// 	$datos['id'] = 1;
// 	if($users)
// 	{
// 		//Obtengo y asigno el ultimo id
// 		$lastUser = end($users);
// 		$datos['id'] = ++$lastUser['id'];
// 	}
//
// 	$users[] = $datos;
//
// 	$json = json_encode(['usuarios' => $users]);
// 	file_put_contents(USERS_FILE, $json);
//
// 	return $datos['id'];
// }
