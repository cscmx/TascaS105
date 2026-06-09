<?php

/*Necessitem crear un tipus de dades que representi un animal. Els animals tenen un nom i "parlen". Hem de tenir en compte, però, que no és el mateix el so de la “parla” d’un gos, que el d’un gat, per exemple. Per tant, necessitem crear altres tipus de dades que ens ajudin a programar aquests comportaments entre diferents animals.
Crea almenys 2 animals.
*/

require_once 'class_ejercicio1_S105/classAnimal.php';
require_once 'class_ejercicio1_S105/classDog.php';
require_once 'class_ejercicio1_S105/classCat.php';
require_once 'class_ejercicio1_S105/classBird.php';

$perro = new Dog("Chucho"); 
$gato = new Cat ("Fifi");
$pajarillo = new Bird("Oreneta");


echo $perro->animalSpeak().PHP_EOL;
echo $gato->animalSpeak().PHP_EOL;
echo $pajarillo->animalSpeak().PHP_EOL;


?>