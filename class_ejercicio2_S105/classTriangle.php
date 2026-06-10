<?php

require_once 'class_ejercicio2_S105/classShape.php';

class Triangle extends Shape 
{
    public function calculateArea(): float  {
        return ($this->height * $this->width)/2;
    }
}

?>