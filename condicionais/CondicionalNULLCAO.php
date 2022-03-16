<?php
$nome = 'Bonieky ';
//$sobrenome = 'Lacerda';

$nomeCompleto = $nome ?? 'Visitante ';
//$nomeCompleto .= isset($sobrenome) ? $sobrenome : '';
$nomeCompleto .= $sobrenome ?? '';

echo $nomeCompleto;