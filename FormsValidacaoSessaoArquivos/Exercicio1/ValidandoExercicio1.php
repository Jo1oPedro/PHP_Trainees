<?php
session_start();
$name = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

$_SESSION['name'] = $name;

header('Location: Exercicio1.php');
exit;