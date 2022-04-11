<?php

require('../config.php');

$method = strtolower($_SERVER['REQUEST_METHOD']);
if($method === 'get') {
    $id = filter_input(INPUT_GET, 'id');
    if($id)
    {
        $sql = $pdo->prepare("SELECT * FROM notes WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();
        if($sql->rowCount() > 0) {
            $sql = $sql->fetch(PDO::FETCH_ASSOC);
            $array['result'] = [
                'id' => $sql['id'],
                'titulo' => $sql['titulo'],
                'body' => $sql['body'],
            ];
        } else {
            $array['error'] = 'ID inexistente';
        }
    } else {
        $array['error'] = 'ID não enviado';
    }
} else {
    $array['error'] = 'Método não permitido(Apenas get)';
}

require('../retorno.php');