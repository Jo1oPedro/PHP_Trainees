<?php

require('../config.php');

$method = strtolower($_SERVER['REQUEST_METHOD']);
if($method === 'post') {
    $title = filter_input(INPUT_POST, 'title');
    $body = filter_input(INPUT_POST, 'body');

    if($title && $body) {
        $sql = $pdo->prepare("INSERT INTO notes (titulo,body) values (:titulo,:body) ");
        $sql->bindValue(':titulo', $title);
        $sql->bindValue(':body', $body);
        $sql->execute();
        $id = $pdo->lastInsertId();
        $array['result'] = [
            'id' => $id,
            'titulo' => $title,
            'body' => $body,
        ];
    } else {
        $array['error'] = 'Campos não enviados';
    }
} else {
    $array['error'] = 'Método não permitido(Apenas post)';
}

require('../retorno.php');