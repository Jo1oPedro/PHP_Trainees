<?php

$nomes = ['Cascata', 'CascataShounen', 'CascataXphp'];

$newNome = 'CascataSearchLove';

print_r($nomes);
echo "<br/>";

array_unshift($nomes, $newNome); // adiciona um novo elemento no inicio do array $nomes

print_r($nomes);
echo "<br/>";