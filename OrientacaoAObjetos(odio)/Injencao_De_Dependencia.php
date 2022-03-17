<?php

interface MatematicaBasica {
    public function somar($val1, $val2);
}

class Basico1 implements MatematicaBasica{
    public function somar($val1, $val2) {
        return $val1 + $val2;
    }
}

class Basico2 implements MatematicaBasica{
    public function somar($val1, $val2) {
        $res = $val1;
        for($i=0;$i<$val2;$i++) {
            $res++;
        }
        return $res;
    }
}

class Matematica {
    private $basico;

    public function __construct(MatematicaBasica $basico) { // injeção de dependencia = inserir uma classe dentro de outra(geralmente dentro do construtor)
        $this->basico = $basico;
    }

    public function somar($x, $y) {
        return $this->basico->somar($x, $y);
    }
}

$mat = new Matematica(new Basico1());

$basico2 = new Basico2();
$mat2 = new Matematica($basico2);

echo $mat->somar(10, 15) . "<br/> <br/>";
echo $mat2->somar(10, 15);

$x = 2;
$mat3 = new Matematica($x); // vai retornar um erro pois $x não é do tipo MatematicaBasica(não implementa essa interface)