<?php

interface Forma {
    public function getTipo();
    public function getArea();
}

class Quadrado {

    private $largura;
    private $altura;

    public function __construct($largura, $altura) {
        $this->largura = $largura;
        $this->altura = $altura;
    }

    public function getTipo() {
        return 'quadrado';
    }

    public function getArea() {
        return $this->largura * $this->altura;
    }
}

class Circulo {
    private $raio;

    public function __construct($raio) {
        $this->raio = $raio;
    }

    public function getTipo() {
        return 'circulo';
    }

    public function getArea() {
        return pi() * ($this->raio * $this->raio);
    }
}

$quadrado = new Quadrado(5,5);
$circulo = new Circulo(7);

$objetos = [
    $quadrado, 
    $circulo,
];

foreach($objetos as $objeto) {
    $tipo = $objeto->getTipo();
    $area = $objeto->getArea();
    echo "Area do " . $tipo . ": " . $area ."<br/> <br/>";
}