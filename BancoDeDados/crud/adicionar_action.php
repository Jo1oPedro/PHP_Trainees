<?php


require('config.php');
// $name = $_POST['name'] também é possivel, porém com o filter_input é possivel já realizar verificações bastante uteis de segurança e validação
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if(!$name || !$email) {
    header("Location: adicionar.php");
    exit;
}

$sql = $pdo->prepare("SELECT * FROM usuarios where email = :email");
$sql->bindValue(':email', $email);
$sql->execute();

if($sql->rowCount() === 0) {
    $sql = $pdo->prepare("INSERT INTO usuarios(nome,email) VALUES (:name, :email)");
    $sql->bindValue(':name', $name); // associa o valor mandado
    $sql->bindParam(':email', $email); // associa o parametro(a propria variavel)
    /* afim de evitar problemas com ataques de sql injection nas querys é mais aconselhavel montar elas utilizando
    o prepare junto ao bindValue
    */
    $sql->execute();
    header("Location: main.php");
    exit;
} else {
    header("Location: adicionar.php");
    exit;
}


