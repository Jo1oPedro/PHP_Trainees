<?php

$nomes = ['Cascata', 'CascataShounen', 'CascataXphp'];

$newNome = 'CascataSearchLove';

print_r($nomes);
echo "<br/>";

$nomes = array_replace($nomes, [
    '0' => $newNome,
]); // retorna um array com a modificação

print_r($nomes);
echo "<br/>";