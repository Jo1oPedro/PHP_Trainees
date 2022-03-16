<?php

$numero = -8.4;
$numero2 = -8.4358;

echo abs($numero) . "<br/>"; // retorna o numero absoluto(positivo)

echo pi() ."<br/>"; // retorna pi;

echo floor($numero) ."<br/>";; // arredonda sempre pra baixo;

echo ceil($numero) ."<br/>";; // arredonda smpre pra cima;

echo round($numero) ."<br/>"; // arredonda conforme o valor do número;

echo round($numero, 2) ."<br/>"; // mantem algumas casas decimais
echo round($numero2, 2) ."<br/>"; // mantem algumas casas decimais

$aleatorio = rand(10,20); // gera um valor aleatorio entre um valor minimo e um max;
echo $aleatorio ."<br/>";

$lista = [1, 4, 9, 8];

echo min($lista) ."<br/>"; // retorna o menor valor do array
echo max($lista) ."<br/>"; // retorna o maior valor do array