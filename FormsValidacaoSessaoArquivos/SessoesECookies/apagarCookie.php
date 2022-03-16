<?php

setcookie('nome', '', time() - 3600); // settar o tempo do cookie no passado para apagar ele
//unset($_COOKIE['nome']);

header('Location: form.php');
exit;