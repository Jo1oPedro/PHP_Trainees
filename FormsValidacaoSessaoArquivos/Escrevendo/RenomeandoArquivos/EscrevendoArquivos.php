<?php

$texto = 'Cascata cascata';

file_put_contents('nome.txt', $texto);

$texto .= "\n" . file_get_contents('../LendoArquivos/texto.txt');

file_put_contents('nome.txt', $texto);

echo 'Arquivo criado com sucesso';
