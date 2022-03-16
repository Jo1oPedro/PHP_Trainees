<?php
$nomeSujo = '      Bonieky        ';

$nomeLimpo = trim($nomeSujo); // retira os espaços desnecessarios

echo 'Nome sujo: ' . $nomeSujo . "<br/>";
echo 'Nome limpo: ' . $nomeLimpo . "<br/>";

echo 'Tamanho nome sujo: ' . strlen($nomeSujo) . "<br/>";
echo 'Tamanho nome limpo: ' . strlen($nomeLimpo) . "<br/>";

echo 'Nome em minusculo: ' . strtolower($nomeLimpo) . "<br/>"; // passando a string inteira para minusculo;
echo 'Nome em maiusculo: ' . strtoUpper($nomeLimpo) . "<br/>"; // passando a string inteira para maicuslo; 

$nomeAlterado = str_replace('e', '3', $nomeLimpo);

echo 'Novo nome: ' . $nomeAlterado . "<br/>";

$nomeCompleto = 'Bonieky Lacerda';

$nome = substr($nomeCompleto, 3, 3); // segundo parametro da onde vai começar e ultimo parametro quantos caracteres quer pegar

echo 'Parte do nome: ' . $nome . "<br/>";