<?php
session_start();

require_once('files.php');
require_once('html.php');
require_once('validacion.php');
require_once('funciones.php');
require_once('usuarios.php');
require_once('secciones.php');


require_once('Contracts/SectionRepository.php');
require_once('Contracts/UserRepository.php');
require_once('Entities/Section.php');
require_once('Entities/User.php');
require_once('Repositories/DatabaseRepository.php');
require_once('Repositories/sectionDatabaseRepository.php');
require_once('Repositories/userDatabaseRepository.php');
