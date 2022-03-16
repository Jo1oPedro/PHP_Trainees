<?php
echo '<pre>';
print_r($_FILES);

$nome = $_FILES['arquivo']['name'];
echo $nome;
move_uploaded_file($_FILES['arquivo']['tmp_name'], '../'.$nome);