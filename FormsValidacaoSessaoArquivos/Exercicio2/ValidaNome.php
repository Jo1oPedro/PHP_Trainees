<?php

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
if(file_exists('nomes.txt')) {
    $nome = file_get_contents('nomes.txt') . "\n" . $nome;
    file_put_contents('nomes.txt', $nome);
} else {
    file_put_contents('nomes.txt', $nome);
}

header('Location: Exercicio2.php');
exit;