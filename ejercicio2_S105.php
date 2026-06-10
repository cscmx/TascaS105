<?php
/*Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea de la figura.
*mateix exercici que a POO1, però aquí necessitem que ho resolguis aplicant algun dels conceptes del tema POO2.
*/

require_once 'class_ejercicio2_S105/classShape.php';
require_once 'class_ejercicio2_S105/classTriangle.php';
require_once 'class_ejercicio2_S105/classRectangle.php';


 $myTriangle = new Triangle(10,5);
 $myRectangle = new Rectangle (5, 8);

 echo "Area triangulo: ".$myTriangle->calculateArea().PHP_EOL;
 echo "Area rectángulo: ".$myRectangle->calculateArea().PHP_EOL;


 
 ?>