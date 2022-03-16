<?php

$array = [
    'nome' => 'Cascata',
    'age' => 90,
    'empresa' => 'B7Web',
    'cor' => 'Azul',
    'profissao' => 'CascataJob',
];

if(key_exists('age', $array)) {
    $idade = $array['age'];
    echo $idade;
} else {
    $idade = $array['idade'];
    echo $idade . " anos";
}
