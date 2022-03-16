<?php

function somar(&$n1, $n2)
{
    $total = $n1 + $n2;
    $n1 = $total;
    return $total;
}

$x = 3;
$y = 2;

echo "Valor do x: " . $x . "<br/>";

$total = somar($x,$y);

echo "Valor total: " . $total . "<br/>";
echo "Valor do x: " . $x;