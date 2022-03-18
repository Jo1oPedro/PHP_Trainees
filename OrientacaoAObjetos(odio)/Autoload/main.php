<?php

//require('matematica.php');
require('autoload.php');

$matematica = new Matematica();

echo "Soma: " . $matematica->somar(10, 15) . "<br/> <br/>";

$x = new Algo(); // não vai encontrar pois não existe

