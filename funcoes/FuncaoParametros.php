<?php

function somar($n1, $n2)
{
    $total = $n1 + $n2;
    return $total;
}

$x = somar(10, 5);
$y = somar(5, 9);
$w = somar($x, $y);

echo $w;