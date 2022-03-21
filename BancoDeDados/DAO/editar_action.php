<?php

require('config.php');
require('dao/UsuarioDaoMysql.php');

$usuarioDao = new UsuarioDaoMysql($pdo);

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$id = filter_input(INPUT_POST, 'id');

if(!$name || !$email ) {
    header("Location:main.php");
    exit;
}

if(!$usuarioDao->findBy('email', $email)) {
    header("Location:main.php");  
    exit;  
}

//$usuario = $usuarioDao->getBy('id', $id);
$usuario = new Usuario();
$usuario->setId($id);
$usuario->setNome($name);
$usuario->setEmail($email);
$usuarioDao->update($usuario);

header("Location:main.php");
exit;



