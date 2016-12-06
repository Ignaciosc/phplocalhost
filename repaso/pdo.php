<?php

if ($_GET['id']) {
	
//PDO
$db = new PDO(
		'mysql:host=localhost;dbname=peliculas_clase_4;charset=utf8mb4',
		'root',
		''
		);

$idSerie = $_GET['id'];

//PDO STATMENTS
$stmt = $db->prepare('SELECT titulo FROM serie WHERE id = :id');
$stmt->bindParam(':id', $idSerie, PDO::PARAM_INT);

//en otro momento
$stmt->execute();
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
	
echo $resultado[0]['titulo'];

} else {
	echo "Deberías ingresar un ID";
}