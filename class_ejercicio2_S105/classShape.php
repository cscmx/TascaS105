<?php

abstract class Shape 
{
    public int $alto;
    public int $ancho;

    public function __construct(int $alto, int $ancho){
        $this->alto = $alto;
        $this->ancho = $ancho;
    }
    public function getAlto(): float {
        return $this->alto;
    }
    public function getAncho(): float {
        return $this->ancho;
    }
    public function setAlto(int $alto): void {
        $this->alto = $alto;
    }
    public function setAncho(int $ancho): void {
        $this->ancho = $ancho;
    }

}

?>