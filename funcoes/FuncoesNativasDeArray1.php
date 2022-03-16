<?php
$nomes = ['nome1', 'nome2', 'nome3', 'nome4', 'nome5'];

echo "Total de elementos no array: " . count($nomes) . "<br/>"; // conta o número de elementos no array

$pessoas = ['Bonieky', 'Pedro', 'Paulo', 'Jose', 'Francisca', 'Paula'];
$aprovados = ['Bonieky', 'Pedro', 'José', 'Francisca'];

$reprovados = array_diff($pessoas, $aprovados); // vai mostrar no array de pessoas os elementos que não estão no array de aprovados

echo "Reprovados: ";
print_r($reprovados);
echo "<br/>";

$numeros = [10, 20, 30, 91, 18];

$filtrados = array_filter($numeros,function($item) {
    if($item < 30) {
        return true;
    } else {
        return false;
    }
}); // roda em cada um dos itens do array, para os que ele retornar true passa o valor para o array $filtrados, que no final vai ter os elementos [10, 20, 24, 18]

echo "Array original: ";
print_r($numeros);
echo "<br/>";

echo "Array filtrado: ";
print_r($filtrados);
echo "<br/>";

$dobrados = array_map(function($item) {
    return $item * 2;
}, $numeros);

echo "Array dobrado: ";
print_r($dobrados);
echo "<br/>";
