<?php
/*Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea de la figura.
*mateix exercici que a POO1, però aquí necessitem que ho resolguis aplicant algun dels conceptes del tema POO2.
*/
require_once 'class_ejercicio2_S105/classTriangle.php';
require_once 'class_ejercicio2_S105/classRectangle.php';
require_once 'class_ejercicio2_S105/classCircle.php';

$myTriangle = new Triangle(10,5);
$myRectangle = new Rectangle (5, 8);
$myCircle = new Circle(5);

echo "Área triangulo: ".$myTriangle->calculateArea().PHP_EOL;
echo "Área rectángulo: ".$myRectangle->calculateArea().PHP_EOL;
echo "Área círculo: ".$myCircle->calculateArea().PHP_EOL;

 
 ?>