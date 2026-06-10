<?php

require_once 'class_ejercicio1_S105/classAnimal.php';

class Dog extends Animal 
{
    public function speaks(): string {
        return  $this->getName()." barks";
    }
}

?>