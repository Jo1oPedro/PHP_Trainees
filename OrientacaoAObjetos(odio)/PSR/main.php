<?php

require('matematica.php');

$matematica = new Matematica();

echo $matematica->somar(10, 15);

// Basicamente o arquivo matematica.php fica responsavel 
// pela declaração de simbolos(classes, funções e etc) entre outros
// já o outro arquivo(esse) fica responsavel pelos efeitos colaterais(uso)
// os arquivos até aqui que realizam a parte da declarão e dos efeitos ao mesmo tempo servem apenas para estudo, logo podem ser ignorados