<?php
$tipo = 'foto';

switch($tipo) {
    case 'foto';
        echo 'Exibindo foto';
        break;
    case 'video';
        echo 'Exibindo video';
        break;
    case 'texto';
        echo 'Exibindo texto';
        break;
}



/*
if($tipo == 'foto') {
    echo 'Exibindo uma foto';
} else if($tipo == 'video') {
    echo 'Exibindo um video';
} else if($tipo == 'texto') {
    echo 'Exibindo um texto';
}
*/