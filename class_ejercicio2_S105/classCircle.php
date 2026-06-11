<?php 

require_once 'class_ejercicio2_S105/classShape.php';


 class Circle extends Shape 
 {

    public function __construct(int $radio)
    {
        return parent::__construct($radio,$radio);
    }

    public function calculateArea(): float {
        $radio = $this->width;
        $area = M_PI * pow($radio,2);
        return round($area,2); 

    }
 }

 ?>