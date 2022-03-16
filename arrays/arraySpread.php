<?php

$bolo1 = [
    'açucar',
    'farinha de trigo',
    'ovo',
    'leite',
    'fermento em pó',
];

$bolo2 = [
    ...$bolo1,
    'corante',
];

print_r($bolo2);
echo $bolo2[0] . "<br/>";