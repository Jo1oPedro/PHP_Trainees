<?php
require('header.php');
session_start();
if($_SESSION['aviso']) {
    echo $_SESSION['aviso'];
    $_SESSION['aviso'] = '';
}
?>

<a href="apagarCookie.php">Apagar cookie</a>

<form method="POST" action="recebedor.php"> 
    
    <label>
        Nome:
        <br/>
        <input type="text" name="nome" />
    </label>
    <br/>
    <br/>

    <label>
        Email:
        <br/>
        <input type="email" name="email" />
    </label>
    <br/>
    <br/>

    <label>
        Senha
        <br/>
        <input type="password" name="senha" />
    </label>
    <br/>
    <br/>

    <label>
        Idade
        <br/>
        <input type="number" name="idade" />
    </label>
    <br/>
    <br/>

    <input type="submit" value="Enviar" />

</form>