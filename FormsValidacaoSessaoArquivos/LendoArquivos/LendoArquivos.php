<?php

$texto = file_get_contents('texto.txt');

echo $texto . "<br/>" . "<br/>";

$texto = explode("\n", $texto);

print_r($texto);
echo "<br/>" . "<br/>";
echo "Número de linhas: " . count($texto) . "<br/>";