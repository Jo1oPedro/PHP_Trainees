<?php

$hash = '$2y$10$FbkzejVcCpvIOplU.M1Ie.rTyrZ3hyxJzD9cUvZx43vZLQ4FUeRda';

// esse hash foi adquirido após rodar o EncriptacaoDeSenhas.php(equivalente a senha 1234);
// porém esse hash é apenas um dos hashs para 1234

$senha = '1234';
$senha2 = '12345';

echo (password_verify($senha, $hash)) ? 'Senha correta!' : 'Senha incorreta';
echo "<br/>";
echo (password_verify($senha2, $hash)) ? 'Senha correta!' : 'Senha incorreta';
echo "<br/>";
