<?php

$array = [
    'nome' => 'Cascata',
    'idade' => 90,
    'empresa' => 'B7Web',
    'cor' => 'Azul',
    'profissao' => 'CascataJob',
];

?>

<style>
table, th, td {
  border:1px solid black;
}
</style>

<table>
    <?php foreach($array as $key => $value) : ?>
        <tr>
            <th><?= $key ?></th>
            <td><?= $value ?></td>     
        </tr>
    <?php endforeach ?>
</table>