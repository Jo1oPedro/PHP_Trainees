<?php

$dizimo = function(int $valor) {
    return $valor * 0.1;
};

$funcao = $dizimo;

echo $funcao(82);