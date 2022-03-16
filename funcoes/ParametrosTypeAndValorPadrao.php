<?php
function somar(int $n1, $n2, $n3 = 0)
{
    return $n1 + $n2 + $n3;
}

$x = somar(1, 3);
$y = somar(5, 3, 2);
$w = somar($x, $y);

echo $w;