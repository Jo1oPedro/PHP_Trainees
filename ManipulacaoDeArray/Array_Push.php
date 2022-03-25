<?php

$nomes = ['Cascata', 'CascataShounen', 'CascataXphp'];

$newNome = 'CascataVerso';

print_r($nomes);
echo "<br/>";

array_push($nomes, $newNome); // adiciona um novo elemento ao final do array $nomes;

print_r($nomes);
echo "<br/>";