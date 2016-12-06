<?php

class Usuario {
  private $id;
  private $nombre;
  private $apellido;
  private $password;
  private $mail;

  public function __construct(Array $miUsuario){
    $this->id= $miUsuario["id"];
    $this->nombre = $miUsuario["nombre"];
    $this->apellido = $miUsuario["apellido"];
    $this->password= $miUsuario["password"];
    $this->mail= $miUsuario["mail"];
  }

  public function getNombre() {
		return $this->nombre;
	}
	public function getApellido() {
		return $this->apellido;
	}
	public function getId() {
		return $this->id;
	}
	public function getMail() {
		return $this->mail;
	}
	public function getPassword() {
		return $this->password;
	}
	public function setNombre($nombre)
	{
		$this->nombre = $nombre;
	}
	public function setApellido($apellido)
	{
		$this->apellido = $apellido;
	}
	public function setMail($mail)
	{
		$this->mail = $mail;
	}
	public function setPassword($password)
	{
		$this->password = password_hash($password, PASSWORD_DEFAULT);
	}
	public function setId($id)
	{
		$this->id = $id;
	}
}
