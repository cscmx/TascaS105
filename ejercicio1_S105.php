<?php

/*Necessitem crear un tipus de dades que representi un animal. Els animals tenen un nom i "parlen". Hem de tenir en compte, però, que no és el mateix el so de la “parla” d’un gos, que el d’un gat, per exemple. Per tant, necessitem crear altres tipus de dades que ens ajudin a programar aquests comportaments entre diferents animals.
Crea almenys 2 animals.
*/

abstract class Animal 
{
    private string $name;

    public function __construct(string $name){
        $this->name = $name;
    }

    public function getName(): string{
        return $this->name;
    }
    public function setName(string $name): void {
        $this->name = $name;
    }

    abstract public function Speak(): string;
}

class Dog extends Animal 
{
    public function Speak(): string {
        return  $this->getName()." barks";
    }
}

class Cat extends Animal 
{
    public function Speak(): string {
        return  $this->getName()." meows";
    }
}

class Bird extends Animal
{
    public function Speak(): string {
        return  $this->getName()." sings";
    } 
}

$perro = new Dog("Chucho"); 
$gato = new Cat ("Fifi");
$pajarillo = new Bird("Oreneta");


echo $perro->Speak().PHP_EOL;
echo $gato->Speak().PHP_EOL;
echo $pajarillo->Speak().PHP_EOL;


?>