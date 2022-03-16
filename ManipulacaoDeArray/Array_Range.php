<?php

$array = range(1, 20, 2); // 1° parametro é onde começa, 2° parametro onde termina, 3° parametro(opcional) de quantos em quantos vai fazer
$array2 = range('a', 'g');
$array3 = range(30, 20);
$array4 = range('f', 'b');

echo "Printando o 1° array: " . "<br/>";
echo "<br/>";

foreach($array as $item) {
    echo $item."<br/>";
}

echo "<br/>";
echo "Printando o 2° array: " . "<br/>";
echo "<br/>";

foreach($array2 as $item) {
    echo $item . "<br/>";
}

echo "<br/>";
echo "Printando o 3° array: " . "<br/>";
echo "<br/>";

foreach($array3 as $item) {
    echo $item . "<br/>";
}

echo "<br/>";
echo "Printando o 4° array: " . "<br/>";
echo "<br/>";

foreach($array4 as $item) {
    echo $item . "<br/>";
}