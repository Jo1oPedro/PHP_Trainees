<?php

// Interface Segregation Principle (Princípio da Segregação da Interface)

// em uma interface devem existir somente os métodos essenciais pelas classes que implementam ela

interface Aves {
    public function setLocation($lat, $long);
    public function renderizar();
}

class Papagaio implements Aves { // interface Aves aprensenta somente metodos essenciais para Papagaio
    public function setLocation($lat, $long) {}
    public function setAltitude($alt) {}
    public function renderizar() {}
}

class Pinguim implements Aves { // interface Aves não aprensenta somente métodos essenciais para Pinguim uma vez que o metodo setAltitude não é essencial para essa classe
    public function setLocation($lat, $long) {}
    public function setAltitude($alt) {return 0;}
    public function renderizar() {}
}

interface AvesQueBoam extends Aves {
    public function setAltitude($alt);
}

class Papagaio2 implements AvesQueVoam { // interface AvesQueVoam aprensenta somente metodos essenciais para Papagaio
    public function setLocation($lat, $long) {}
    public function setAltitude($alt) {}
    public function renderizar() {}
}

class Pinguim2 implements Aves { // interface Aves aprensenta somente métodos essenciais para Pinguim 
    public function setLocation($lat, $long) {}
    public function renderizar() {}
}
