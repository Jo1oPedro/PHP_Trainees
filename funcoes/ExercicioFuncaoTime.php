<?php

$date = date('Y/m/d');
echo $date . "<br/>";

$date = strtotime($date);

function getDia($date) {
    $dia = date('l', $date);
    return $dia;
}

print_r(getDia($date));
//echo getDia(explode('/',$date));