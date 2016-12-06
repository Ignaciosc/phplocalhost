<?php

abstract class Creador {
    public abstract function Crear();
}

class Mail {
    public function __construct() {
        echo "un mail fue creado";
    }
}

class Contact {
    public function __construct() {
        echo "un contacto fue creado";
    }
}

class CreadorMail extends Creador {
    public function Crear() {
        return new Mail();
    }
}

class CreadorContacto extends Creador {
    public function Crear() {
        return new Contact();
    }

}

class BotonNuevo {
    private $miCreador;
    public function SetCreador($elCreador) {
        $this->miCreador = $elCreador;
    }
    public function Click() {
        $this->miCreador->Crear();
    }
}


$miBoton = new BotonNuevo();

$unCreadorDeMail = new CreadorMail();

$miBoton->SetCreador($unCreadorDeMail);

$miBoton->Click();


echo "<br>";


$unCreadorDeContacto = new CreadorContacto();

$unCreadorDeContacto = new CreadorContacto();

$miBoton->SetCreador($unCreadorDeContacto);

$miBoton->Click();
