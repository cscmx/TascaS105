<?php

require_once 'class_ejercicio1_S105/classAnimal.php';

class Bird extends Animal
{
    public function animalSpeak(): string {
        return  $this->getName()." sings";
    } 
}

?>