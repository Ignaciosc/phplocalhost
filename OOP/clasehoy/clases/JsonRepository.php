<?php
require_once("repository.php");
require_once("UserRepository.php");
require_once ("UserJsonRepository.php");

class JsonRepository extends Repository{
  private $userRepository;
  private $carRepository
  public function getUserRepository(){
    if ($this->userRepository == null){
      $this->userRepository = new UserJsonRepository();

    }
    return $this->userRepository;
  }

}
