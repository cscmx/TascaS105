<?php 

require_once 'class_ejercicio2_S105/classShape.php';

 class Rectangle extends Shape 
 {
    public function calcularArea() {
        return $this->alto * $this->ancho;
    }
 }

 ?>

 