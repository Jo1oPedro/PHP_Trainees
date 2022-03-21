<?php

require('config.php');
require('dao/UsuarioDaoMysql.php');
$usuarioDao = new UsuarioDaoMySql($pdo);

$id = filter_input(INPUT_GET, 'id');
$usuario = $usuarioDao->getBy('id', $id);
if(!$id || !$usuario) {
    header("Location:main.php");
    exit;
} 
?>

<h1> Editar usuario </h1>

<form method="POST" action="editar_action.php">

    <input type="hidden" name="id" value="<?=$id;?>" />

    <label>
        Nome:<br/>
        <input type="text" name="name" value="<?=$usuario->getNome()?>"/>
    </label>
    
    </br>

    <label>
        E-mail:<br/>
        <input type="email" name="email" value="<?=$usuario->getEmail()?>"/>
    </label>

    </br>
    
    <input type="submit" value="Salvar" />
</form>