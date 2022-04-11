<?php

require('../config.php');

$method = strtolower($_SERVER['REQUEST_METHOD']);
if($method === 'put') {
    parse_str(file_get_contents('php://input'), $input); // pegando um metodo put e inserindo na variavel $input
    $id = $input['id'] ?? null;
    $title = $input['title'] ?? null;
    $body = $input['body'] ?? null;
    $id = filter_var($id);
    $title = filter_var($title);
    $body = filter_var($body);
    if($id && ($title || $body)) {
        $sql = $pdo->prepare("SELECT * FROM notes WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();
        if($sql->rowCount() > 0) {
            $sql = $pdo->prepare("UPDATE notes SET titulo = :titulo, body = :body WHERE id = :id");
            $sql->bindValue(':id', $id);
            $sql->bindValue(':titulo', $title);
            $sql->bindValue(':body', $body);
            $sql->execute();
            $array['result'] = [
                'id' => $id,
                'titulo' => $title,
                'body' => $body,
            ];
        } else {
            $array['error'] = 'ID inexistente';
        }
    } else {
        $array['error'] = 'Campos não enviados';
    }
} else {
    $array['error'] = 'Método não permitido(Apenas PUT)';
}

require('../retorno.php');