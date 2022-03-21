<?php

// Liskov Substitution Principle (Princípio da substituição de Liskov)

class A {
    public function getNome() {
        return "Meu nome é A";
    }
}

class B extends A { // class B não é obrigada a implementar os metodos da class A, porém ela passara a ser também da class A
    public function getNome() {
        return "Meu nome é B";
    }
}

class C extends A { // class C está fugindo do principio a partir do momento em que ela não mais retorna uma string, mas sim um inteiro
    public function getNome() {
        return 30;
    }
}

function imprimeNome(A $obj) { // basicamente essa função que utiliza do objeto A tem que poder receber um objeto B que extenda da classe A, sem apresentar o menor problema(Liskov Substitution Principle)
    // pelo oq eu entendi, uma forma eficaz de aplicar isso afim de evitar problemas é criando uma interface, nesse caso, uma interface com metodo getNome() e implementar ela em todas as classes que extendem A e no proprio A
    return $obj->getNome();
}

$objeto = new A();
$objeto2 = new B();
$objeto3 = new C();
echo imprimeNome($objeto) . "<br/>";
echo imprimeNome($objeto2) . "<br/>";
echo imprimeNome($objeto3) . "<br/>";