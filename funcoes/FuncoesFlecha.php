<?php

$dizimo = fn($valor) => $valor * 0.1;

$somar = fn($n1, $n2) => $n1 + $n2;

echo $dizimo(10) . "<br/>";
echo $somar(2,3);