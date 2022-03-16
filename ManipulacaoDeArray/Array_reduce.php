<?php

$numeros = [1, 2, 3, 4, 5];

function somar($subtotal, $item) { // subtotal começa com 0, o $item são os elementos do array
    $subtotal += $item;
    return $subtotal;
}

$total = array_reduce($numeros, 'somar');

echo "Soma dos elementos do array: " . $total . "<br/> <br/>";

$pessoas = [
    ['nome' => 'Cascata', 'sexo' => 'M', 'nota' => 0],
    ['nome' => 'Cascata2', 'sexo' => 'M', 'nota' => 1],
    ['nome' => 'Cascata3', 'sexo' => 'F', 'nota' => 2],
    ['nome' => 'Cascata4', 'sexo' => 'F', 'nota' => 3],
    ['nome' => 'Cascata5', 'sexo' => 'F', 'nota' => 4],
    ['nome' => 'Cascata6', 'sexo' => 'M', 'nota' => 5],
];

function contar_m($subtotal, $item) {
    if($item['sexo'] === 'M') {
        $subtotal += 1;
    }
    return $subtotal;
}

function contar_notas_m($subtotal, $item) {
    if($item['sexo'] == 'M') {
        $subtotal += $item['nota'];
    }
    return $subtotal;
}

$total_m = array_reduce($pessoas, 'contar_m');
$total_notas_m = array_reduce($pessoas, 'contar_notas_m', 0); // um 3° parametro pode ser utilizado para indicar com qual valor o $subtotal ira iniciar(0 é o padrão)

echo "Total de alunos homens: " . $total_m . "<br/> <br/>";
echo "Soma das notas dos alunos homens: " . $total_notas_m . "<br/> <br/>";
echo "Media da nota dos homens: " . $total_notas_m/$total_m;
