<?php

require_once 'class_ejercicio1_S105/classAnimal.php';

class Cat extends Animal 
{
    public function speaks(): string {
        return  $this->getName()." meows";
    }
}


?>