<?php

echo '<pre>';
print_r($_FILES);

$tipo = $_FILES['arquivo']['type'];
$allowedTypes = ['image/jpeg', 'image/jpg', 'image/png'];

if(in_array($tipo, $allowedTypes)) {
    $tipo =  explode('/', $tipo);
    $ext = '.'.$tipo[1];
    $nome = md5(time().rand(0,1000)).$ext;
    move_uploaded_file($_FILES['arquivo']['tmp_name'], $nome);

    echo "<span style='color: green;'>Imagem cadastrada com sucesso!</span>";
    echo '<meta http-equiv="refresh" content="3; url=Upload2.php">';
} else {
    echo "<span style='color: red;'>Arquivo não permitido</span>";
    echo '<meta http-equiv="refresh" content="4; url=Upload2.php">';
}
