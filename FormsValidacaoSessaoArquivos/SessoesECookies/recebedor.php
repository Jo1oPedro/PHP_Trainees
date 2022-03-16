<?php
session_start();

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS); // tente enviar um código html no nome para entender
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL); // Valida varios tipos diferentes de input
$senha = filter_input(INPUT_POST, 'senha', /*FILTER_VALIDATE_INT*/);
$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT/*FILTER_SANITIZE_NUMBER_INT // Limpa a string, mantendo apenas a parte inteira */);

$sobrenome = '<h1>Cascata</h1>';
$sobrenome = filter_var($sobrenome, FILTER_SANITIZE_STRING); // utilizado para validar ou sanitizer de uma variavel que não está vindo de uma requisição

if($nome && $email && $senha && $idade) {

    $expiracao = time() + (86400 * 30); // validade de 30 dias;
    setcookie('nome', $nome, $expiracao);// só há como settar um cookie antes de exibir qualquer coisa na tela
    // 1° parametro do cookie é o nome dele, 2° é o valor a ser guardado e o 3° o tempo para ele expirar
    echo 'Nome: ' . $nome . "<br/>";
    echo 'Sobrenome: ' . $sobrenome . "<br/>";
    echo 'Email: ' . $email . "<br/>";
    echo 'Senha: ' . $senha . "<br/>";
    echo 'Idade: ' . $idade; 
} else {
    $_SESSION['aviso'] = 'Preencha os itens corretamente!';
    header("Location: form.php"); // funcao header troca o cabeçalho da requisição
    exit; // sempre depois do header se coloca um exit, para cancelar a execução de qualquer coisa para baixo(proteção)
    //echo 'Campo(s) não enviado(s)';
}

/* A diferença de sessão para o cookie é que a sessão acaba assim que o navegador é fechado,
   já por outro lado, o cookie permanece pelo tempo que você escolheu.
*/