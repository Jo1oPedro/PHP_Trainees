<?php
session_start();
$_SESSION['nome'] = '';

header('Location: Exercicio1Login.php');
exit;