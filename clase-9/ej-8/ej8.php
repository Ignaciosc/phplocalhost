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

}

$cliente1 = new cliente('Nacho','Santa Cruz',34630424,'01/08/1989','ignaciosc89@gmail.com','password1');
var_dump($cliente1);
echo '<br>';

$cliente1->setEmail('federicosc@gmail.com');
$cliente1->setPassword('123456');

echo ($cliente1->getNombre() . '<br>');
echo ($cliente1->getApellido() . '<br>');
echo ($cliente1->getDocumento() . '<br>');
echo ($cliente1->getFechaNac() . '<br>');
echo ($cliente1->getEmail() . '<br>');
echo ($cliente1->getPassword() . '<br>');


 ?>


 <!-- 8. Crear “getters” y “setters” para los atributos de la clase. Cambiar el código para que
 utilice estos métodos. -->
