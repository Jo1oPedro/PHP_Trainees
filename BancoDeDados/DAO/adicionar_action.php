<?php


require('config.php');
require('dao/UsuarioDaoMysql.php');

$usuarioDao = new UsuarioDaoMysql($pdo);
// $name = $_POST['name'] também é possivel, porém com o filter_input é possivel já realizar verificações bastante uteis de segurança e validação
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if(!$name || !$email) {
    header("Location: adicionar.php");
    exit;
}

if($usuarioDao->findBy('email',$email)) {
    
    $newUsuario = new Usuario();
    $newUsuario->setNome($name);
    $newUsuario->setEmail($email);

    $usuarioDao->create($newUsuario);

    header("Location: main.php");
    exit;
} else {
    header("Location: adicionar.php");
    exit;
}


