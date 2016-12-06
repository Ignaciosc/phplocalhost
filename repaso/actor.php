<?php

require_once("pelicula.php");

class Actor {
	private $id;
	private $nombre;
	private $apellido;
	private $rating;
	private $idPeliculaPreferida;
	// Este atributo va a ser un objeto y va a ser de TIPO PELICULA.
	private $peliculaPreferida;
	private $peliculasEnLasQueActua;

	public static function arrayToActor(Array $arrayDatos) {
		return new Actor($arrayDatos["id"],$arrayDatos["nombre"],$arrayDatos["apellido"],$arrayDatos["rating"],$arrayDatos["id_pelicula_preferida"]);
	}

	public function __construct($id, $nombre, $apellido, $rating, $idPeliculaPreferida)
	{
		$this->id = $id;
		$this->nombre = $nombre;
		$this->apellido = $apellido;
		$this->rating = $rating;
		$this->idPeliculaPreferida = $idPeliculaPreferida;
	}

	public function getId()
	{
		return $this->id;
	}
	public function getNombre()
	{
		return $this->nombre;
	}
	public function getApellido()
	{
		return $this->apellido;
	}
	public function getIdPeliculaPreferida()
	{
		return $this->idPeliculaPreferida;
	}
	public function getRating() 
	{
		return $this->rating;
	}
	public function setId($id)
	{
		$this->id = $id;
	}
	public function setNombre($nombre)
	{
		$this->nombre = $nombre;
	}
	public function setApellido($apellido)
	{
		$this->apellido = $apellido;
	}
	public function setRating($rating)
	{
		$this->rating = $rating;
	}

	public function getNombreCompleto()
	{
		return $this->nombre . " " . $this->apellido;
	}


	public function getFavoriteMovie($db)
	{
		if ($this->peliculaPreferida)
		{
			return $this->peliculaPreferida;
		}

		// Select * from pelicula where id = $this->idPeliculaPreferida
		$consultaPeliPrefe = $db->prepare("Select * from pelicula where id = :id");

		$consultaPeliPrefe->bindValue(":id", $this->idPeliculaPreferida);

		$consultaPeliPrefe->execute();

		$peliPreferida = $consultaPeliPrefe->fetch();

		if ($peliPreferida)
		{
			$this->peliculaPreferida = Pelicula::arrayToPelicula($peliPreferida);
		}

		return null;
	}

	public function listMovies($db)
	{
		if ($this->peliculasEnLasQueActua)
		{
			return $this->peliculasEnLasQueActua;
		}

		$this->peliculasEnLasQueActua = [];

		$consultaPelisActor = $db->prepare("SELECT pelicula.*
			from pelicula
			INNER JOIN actor_pelicula on actor_pelicula.id_pelicula = pelicula.id
			WHERE actor_pelicula.id_actor = :idActor");

		$consultaPelisActor->bindValue(":idActor", $this->id);

		$consultaPelisActor->execute();

		$fila =$consultaPelisActor->fetch();
		while ($fila)
		{
			$this->peliculasEnLasQueActua[] = Pelicula::arrayToPelicula($fila);
			$fila =$consultaPelisActor->fetch();
		}

		return $this->peliculasEnLasQueActua;
	}
}