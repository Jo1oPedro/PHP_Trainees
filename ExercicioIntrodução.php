<?php
$lista = [
    'nome' => 'Bonieky',
    'idade' => 90,
    'atributos' => [
        'força' => 60,
        'agilidade' => 80,
        'destreza' => 50,
    ],
    'vida' => 1000,
    'mana' => 928,
];

echo "Nome: ".$lista['nome']."<br/>";
echo "Força: ".$lista['atributos']['força']."<br/>";
echo "Vida: ".$lista['vida']."<br/>";