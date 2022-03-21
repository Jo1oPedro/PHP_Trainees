<?php

$senha = '1234';

$hash = password_hash($senha, PASSWORD_DEFAULT); // o php avalia o melhor metodo para gerar um hash e aplica
// a recomendação é usar sempre o PASSWORD_DEFAULT
$hash2 = password_hash($senha, PASSWORD_BCRYPT);

echo "Senha original: " . $senha . "</br>";

echo "Hash: " . $hash . "</br>";
echo "Hash2: " . $hash2 . "<br/>";

$hash3 = md5($senha); // gera um hash de 32 caracteres(é sempre o mesmo conforme a senha)
// há a possibilidade de duas senhas diferentes terem o mesmo hash utilizando o md5, apesar de pequenas as chances, elas ainda existem
// por esse motivo ele tem caido em desuso hoje em dia 

echo $hash; 

// A recomendação do php é utilizar o password_hash() desse arquivo, junto ao password_verify() do arquivo EncriptacaoDeSenhas2 para realizar a encriptcao e validacao de uma senha