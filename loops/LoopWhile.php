<?php

$numero = 0;

while($numero < 10) {
    echo "N: ".$numero."<br/>";

    $numero += 1;
}

do {
    $numero +=1;
    echo "N: ".$numero."<br/>";
} while($numero < 20);