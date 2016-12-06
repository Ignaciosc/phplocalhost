<?php

class cliente {
    private $nombre;
    private $apellido;
    private $documento;
    private $fechaDeNacimiento;
    private $email;
    private $password;
    public function __construct($nombre,$apellido,$documento,$fechaDeNacimiento,$email,$password) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->documento = $documento;
        $this->fechaDeNacimiento = $fechaDeNacimiento;
        $this->email = $email;
        $this->password = $password;
    }
    public function getNombre() {
        return $this->nombre;
    }
    public function getApellido() {
        return $this->apellido;
    }
    public function getDocumento() {
        return $this->documento;
    }
    public function getFechaNac() {
        return $this->fechaDeNacimiento;
    }
    public function getEmail() {
        return $this->email;
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    public function getPassword() {
        return $this->password;
    }
    public function setPassword($password) {
        $this->password = $password;
    }

    // Creo metodo que saluda
    public function saludar() {
        return ('Hola, me llamo ' . $this->nombre . ' ' . $this->apellido);
    }

}
$cliente1 = new cliente('Nacho','Santa Cruz',34630424,'01/08/1989','ignaciosc89@gmail.com','password1');
echo $cliente1->saludar();
 ?>


 <!-- 9. Crear un método llamado “saludar” que imprima “Hola, me llamo <nombre> <apellido>”
 (donde <nombre> y <apellido> son los atributos de clase correspondientes). -->
