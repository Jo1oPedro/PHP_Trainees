<?php

$ingredientes = [
    'açucar' => 3,
    'farinha de trigo' => 5,
    'ovo' => 6,
    'leite' => 8,
    'fermento em pó' => 10,
];

echo '<h2>Ingredientes</h2>';

echo '<ul>';
foreach($ingredientes as $ingredienteKey => $ingrediente)
{
    echo '<li>';
    echo $ingredienteKey . ' quantidade: ' . $ingrediente . "<br/>";
    echo '</li>';
}
echo '</ul>';