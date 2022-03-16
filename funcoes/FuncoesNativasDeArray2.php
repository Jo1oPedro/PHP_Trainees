<?php

$numeros = [10, 20, 24, 5, 14, 91, 18];

echo "Array original: ";
print_r($numeros);
echo "<br/>";

array_pop($numeros); // Remove o ultimo elemento do array, nesse caso remove o 18

echo "Array após o array_pop: ";
print_r($numeros);
echo "<br/>";

array_shift($numeros); // Remove o primeiro elemento do array, nesse caso remove o 10

echo "Array após o array_shift: ";
print_r($numeros);
echo "<br/>";

if(in_array(90, $numeros)) { // Pesquisa se o 1° argumento existe dentro do array  
    echo "Existe no array" . "<br/>"; 
} else {
    echo "Não existe no array" . "<br/>";
}

$posicao = array_search(91, $numeros); // Pesquisa e retorna a posicao do 1° argumento dentro do array
                                       // Caso o 1° argumento não existe no array ele retorna nada(false)
echo "Posicao do 91 no array: " . $posicao . "<br/>";

echo "Array antes de ordenar: ";
print_r($numeros);
echo "<br/>";

sort($numeros); // ordena o array de forma crescente(altera a chave de cada elemento)
echo "Array após ordenar de forma crescente";
print_r($numeros);
echo "<br/>";
echo "Primeiro elemento do array: " . $numeros[0];
echo "<br/>";

rsort($numeros); // ordena o array de forma descrecente(altera a chave de cada elemento)
echo "Array após ordenar de forma decrescente: ";
print_r($numeros);
echo "<br/>";
echo "Primeiro elemento do array: " . $numeros[0];
echo "<br/>";

asort($numeros); // ordena o array de forma crescente(não altera a chave de cada elemento)
echo "Array após ordenar de forma crescente e não alterando a chave dos elementos: ";
print_r($numeros);
echo "<br/>";
echo "Primeiro elemento do array: " . $numeros[0];
echo "<br/>";

arsort($numeros); // ordena o array de forma descrecente(não altera a chave de cada elemento)
echo "Array após ordenar de forma crescente e não alterando a chave dos elementos: ";
print_r($numeros);
echo "<br/>";
echo "Primeiro elemento do array: " . $numeros[0];
echo "<br/>";

$nomes = ['João', 'Pedro', 'Cascata'];

$nome = implode(' ', $nomes); // transforma um array em uma string

echo "Array de nomes depois de virar uma string: " . $nome . "<br/>"; 