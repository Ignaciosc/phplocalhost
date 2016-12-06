<?php
require_once("actor.php");
$db = new PDO(
   	'mysql:host=localhost;dbname=peliculas_clase_4',
    'root',
    '');

$miConsultaActores = $db->prepare("SELECT * from actor");

$miConsultaActores->execute();

$fila = $miConsultaActores->fetch(PDO::FETCH_ASSOC);
echo "<ul>";
while ($fila)
{
	$actor = Actor::arrayToActor($fila);

	echo "<li>";
	echo $actor->getNombreCompleto();
	echo " - Peli prefe: ";
	$peliPreferida = $actor->getFavoriteMovie($db);
	if ($peliPreferida)
	{
		echo $peliPreferida->getTitulo();
	}
	else
	{
		echo "No tiene";
	}


	$pelisEnLasQueActua = $actor->listMovies($db);

	echo "<br>";
	echo "Pelis en las que actua:";
	echo "<br>";
	echo "<ul>";
	foreach ($pelisEnLasQueActua as $pelicula) {
			echo "<li>";
			echo $pelicula->getTitulo();
			echo "</li>";
		}	
	echo "</ul>";

	echo "</li>";

	$fila = $miConsultaActores->fetch();
}
echo "</ul>";




