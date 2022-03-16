<?php

echo "Milisegundos: " . time() . "<br/>"; // segundos desde 01/01/1970

echo "Data no formato brasileiro: " . date('d/m/Y') . "<br/>"; // data no formato brasileiro(sem horas e etc);
echo "Data no formato brasileiro: " . date('d.m.Y') . "<br/>"; // data no formato brasileiro(sem horas e etc);
echo "Data no formato internacional: " . date('Y/m/d') . "<br/>";

$dataInternacional = date('Y/m/d');
$time = strtotime($dataInternacional);
echo "Data formatada pro formato brasileiro: " . date('d/m/Y', $time) . "<br/>";

echo "Data no formato brasileiro com horas e etc: " . date('d/m/Y H:i:s') . "<br/>";

echo "Somente o dia da data: " . date('d') . "<br/>"; // é possivel pegar qualquer elemento individualmente