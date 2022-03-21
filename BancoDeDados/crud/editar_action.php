<?php

require('config.php');

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$id = filter_input(INPUT_POST, 'id');

if(!$name || !$email ) {
    header("Location:main.php");
    exit;
}

$sql = $pdo->prepare("SELECT * FROM usuarios where email = :email");
$sql->bindValue(':email', $email);
$sql->execute();

if($sql->rowCount() > 0) {
    header("Location:main.php");  
    exit;  
}

$sql = $pdo->prepare("UPDATE usuarios SET nome = :nome, email = :email WHERE id = :id");
$sql->bindValue('nome', $name);
$sql->bindValue('email', $email);
$sql->bindValue('id', $id);
$sql->execute();

header("Location:main.php");
exit;



