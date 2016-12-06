<?php

function register(array $datos)
{
	//$password = $datos['pass'];
	//$datos['pass'] = password_hash($datos['pass'], PASSWORD_DEFAULT);
	//$json = json_encode($datos);
	//echo $json;
	//$array = json_decode($json, true);
	//var_dump($array);
	//var_dump(password_verify($password, $array['pass']));

	$datos['pass'] = password_hash($datos['pass'], PASSWORD_DEFAULT);
	$json = json_encode($datos);

	unset($datos['terminos']);

	file_put_contents('usuarios.json', $json);
}