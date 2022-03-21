<?php

// tabela sendo utilizada aqui tem um campo id, nome e email

$pdo = new PDO("mysql:dbname=test;host=localhost", "root", "");
/* 
pdo é uma biblioteca e serve pra conectar com diversos bancos de dados
*/
$sql = $pdo->query('SELECT * FROM usuario'); // query() método realizado para fazer uma consulta

//$dados = $sql->fetchAll(); 
/* não há nenhuma associação dentro do fetchAll(), 
logo ele ira retornar cada elemento 2x, uma com a chave 
sendo o nome('id','nome','email') e o outro com a chave 
sendo 0,1,2...*/

$dados = $sql->fetchAll(PDO::FETCH_ASSOC); 
/*a partir de agora há uma associação no fetchAll que ira
retornar as chaves de cada elemento sendo o nome delas
('id','nome','email') e etc
*/

echo "Total: " . $sql->rowCount();

echo '<pre>';

print_r($dados);