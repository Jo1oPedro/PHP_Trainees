<?php
session_start();
if(!$_SESSION['name']) {
    header('Location: Exercicio1Login.php');
    exit;
}
?>

<h1>Olá, <?php echo $_SESSION['name'] ?>
    - <a href="ApagarSessao.php"> Sair </a>
</h1>