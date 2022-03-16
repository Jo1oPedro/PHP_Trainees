<?php

//include('xesque.php'); // include em caso de erro lança um warning mas não para a aplicação
//require('xesque.php'); // require lança um fatal error que para a aplicação em caso de erro 
require('config.php');
require('header.php');
require_once('header.php'); // com o require_once o arquivo é puxado uma única vez

echo "Conteudo do meu site" . "<br/>";

echo "Nome do usuario: " . $usuario . "<br/>";