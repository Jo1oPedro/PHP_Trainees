<?php

$date = new DateTime();

echo $date->format('d/m/Y') . "<br/>";

$date2 = new DateTime('2020-01-01 15:35:00');
echo $date2->format('d/m/Y H:i:s') . "<br/>"; // horario em greenwich

$date2->setTimezone(new DateTimeZone('America/Sao_Paulo'));
echo $date2->format('d/m/Y H:i:s') . "<br/>";

$date2->add(DateInterval::createFromDateString('7 years 2 days 5 minutes 17 seconds'));
echo $date2->format('d/m/Y H:i:s') . "<br/>";

$date2->sub(DateInterval::createFromDateString('17 years 12 days 15 minutes 117 seconds'));
echo $date2->format('d/m/Y H:i:s') . "<br/>";

echo ($date > $date2) ? 'Date é maior que date2' : 'Date2 é maior que date';
echo "<br/>";

$diff = $date->diff($date2);
echo 'Quantidade de dias de diferença: ' . $diff->format('%a dias') . "<br/>"; // quantidade de dias na diferença
echo 'Quantidade de meses e dias de diferença: ' . $diff->format('%y anos, %m meses, %d dias, %h horas, %i minutos, %s segundos'); // quantidade de meses e dias na diferença