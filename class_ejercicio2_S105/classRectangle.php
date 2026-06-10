<?php 

require_once 'class_ejercicio2_S105/classShape.php';

 class Rectangle extends Shape 
 {
    public function calculateArea(): float {
        return $this->height * $this->width;
    }
 }

 ?>

 