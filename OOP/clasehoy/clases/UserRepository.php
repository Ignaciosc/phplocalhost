<?php
require_once("usuario.php");
abstract class UserRepository{
  abstract public function guardarUsuario($miUsuario);
}
