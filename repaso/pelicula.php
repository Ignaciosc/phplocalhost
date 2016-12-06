<?php 

class Pelicula {
	private $id;
	private $titulo;
	private $rating;
	private $premios;
	private $fechaDeEstreno;
	private $duracion;
	private $idGenero;

	public static function arrayToPelicula(Array $arrayDatos) {
		return new Pelicula($arrayDatos["id"],$arrayDatos["titulo"],$arrayDatos["rating"],$arrayDatos["premios"],$arrayDatos["fecha_de_estreno"],$arrayDatos["duracion"],$arrayDatos["id_genero"]);
	}

	public function __construct($id, $titulo, $rating, $premios, $fechaDeEstreno, $duracion, $idGenero) {
		$this->id = $id;
		$this->titulo = $titulo;
		$this->rating = $rating;
		$this->premios = $premios;
		$this->fechaDeEstreno = $fechaDeEstreno;
		$this->duracion = $duracion;
		$this->idGenero = $idGenero;
	}

	public function getId() 
	{
		return $this->id;
	}
	public function getTitulo()
	{
		return $this->titulo;
	}
	public function getPremios() 
	{
		return $this->premios;
	}
	public function getFechaDeEstreno()
	{
		return $this->fechaDeEstreno;
	}
	public function getDuracion()
	{
		return $this->duracion;
	}
	public function getIdGenero()
	{
		return $this->idGenero;
	}

	public function setId($id) 
	{
		$this->id = $id;
	}
	public function setTitulo($titulo)
	{
		$this->titulo = $titulo;
	}
	public function setPremios($premios) 
	{
		$this->premios = $premios;
	}
	public function setFechaDeEstreno($fechaDeEstreno)
	{
		$this->fechaDeEstreno = $fechaDeEstreno;
	}
	public function setDuracion($duracion)
	{
		$this->duracion = $duracion;
	}
	public function setIdGenero($idGenero)
	{
		$this->idGenero = $idGenero;
	}
}

?>