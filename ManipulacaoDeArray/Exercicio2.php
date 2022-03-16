<?php

$array = [
    'nome' => 'Cascata',
    'idade' => 90,
    'empresa' => 'B7Web',
    'cor' => 'Azul',
    'profissao' => 'CascataJob',
    'cidade' => 'CascataCity',
];

$array_keys = array_keys($array); // é possivel fazer somente utilizando $array as $key => $value; e utilizar somente a $key, mas vai de cada um
$array_values = array_values($array);

?>

<style>
table, th, td {
  border:1px solid black;
}
</style>

<table>
    <tr>
        <?php foreach($array_keys as $key) : ?>
            <th><?= $key ?></th>
        <?php endforeach; ?>
    </tr>

    <tr>
        <?php foreach($array_values as $value) : ?>
            <td><?= $value ?></td>    
        <?php endforeach; ?>
    </tr>
</table>