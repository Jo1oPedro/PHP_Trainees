<?php
$nomeCompleto = 'bonieky lacerda';

$posicao = strpos($nomeCompleto, 'a'); // pega a primeira ocorrencia do 2° parametro no 1° parametro

$posicaoFalse = strpos($nomeCompleto, 'z'); // vai retornar -1 ou nada quando não existe

echo "Posicao da letra a na string $nomeCompleto: $posicao" . "<br/>";
echo "Posicao da letra z na string $nomeCompleto: $posicaoFalse" . "<br/>"; 

if($posicaoFalse) {
    echo "Achou" . "<br/>";
} else {
    echo "Não achou" . "<br/>";
}

echo ucfirst($nomeCompleto) . "<br/>"; // transforma a primeira letra em maiusculo

echo ucwords($nomeCompleto) . "<br/>"; // transforma em uppercase a primeira letra de cada palavra

$nomes = explode(' ', $nomeCompleto); // transformando uma string em um array(cada palavra vai ser uma posicao do array);
                                      // o primeirao parametro serve pra dizer onde ele deve dividir cada palavra
print_r($nomes);
echo "<br/>";

$numero = 12913.12;

echo 'R$ ' . number_format($numero, 2 , ',' , '.') . "<br/>"; // 1° parametro: núnero, 2° parametro: quantidade de decimais que vai ter, 3° parametro(opcional): simbolo correspondente aos decimais(, ou . ou etc), 4° parametro, simbolo utilizado para separar os milhares 