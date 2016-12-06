<?php

$json = '{
"employees" : [
    { "firstName" : "John", "lastName" : "Doe" },
    { "firstName" : "Anna", "lastName" : "Smith" },
    { "firstName" : "Peter", "lastName" : "Jones" }
]
}';

$array = json_decode($json, true);

var_dump($array);

$usuario = [
	'nombre' => 'Dario',
	'apellido' => 'Govergun',
	'edad' => 29,
	'secciones' => [1, 2, 3],
	'direccion' => [
		'calle' => 'Av. Monroe',
		'numero' => 860,
		'barrio' => 'Nuñez'
	]
];

$json = json_encode($usuario);
var_dump($json);