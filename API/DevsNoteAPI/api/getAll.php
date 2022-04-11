<?php

require('../config.php');

$method = strtolower($_SERVER['REQUEST_METHOD']);
if($method === 'get') {
    $sql = $pdo->query('SELECT * FROM notes');
    if($sql->rowCount() > 0) {
        $sql = $sql->fetchAll(PDO::FETCH_ASSOC);
        foreach($sql as $item) {
            $array['result'][] = [
                'id' => $item['id'],
                'titulo' => $item['titulo'],
            ];
        }
    }
} else {
    $array['error'] = 'Método não permitido(Apenas get)';
}

require('../retorno.php');