<?php

class Calculadora {

    private float $total = 0;

    public function somar(int $val = 0) {
        $this->total += $val;
    }

    public function subtrair(int $val = 0) {
        $this->total -= $val;
    }

    public function multiplicar(int $val = 0) {
        $this->total *= $val;
    }

    public function dividir(int $val = 1)  {
        ($val == 0) ? $val = 1 : $val = $val;
        $this->total /= $val;
    }

    public function total() : float{
        return $this->total;
    }
    
    public function limpar() {
        $this->total = 0;
    }
}