<?php

require 'classe1.php';
require 'classe2.php';
require 'classes/matematica/basico.php';
//use classes\matematica\Basico as MatematicaBasica;
use classes\matematica\Basico;

$classe1 = new classe1\MinhaClasse();
// como classe1 e classe2 apresentam uma classe com o mesmo, 
// não é possivel utilizar as duas no mesmo arquivo sem a utilização dos namespaces

echo $classe1->testar();

//$basico = new classes\matematica\Basico();
//$basico = new MatematicaBasica();
$basico = new Basico();