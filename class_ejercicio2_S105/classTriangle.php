<?php

require_once 'class_ejercicio2_S105/classShape.php';

class Triangle extends Shape 
{
    public function calcularArea() {
        return ($this->alto * $this->ancho)/2;
    }
}

?>