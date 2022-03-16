<?php

file_put_contents('teste.txt', 123);

echo (file_exists('teste.txt')) ? 'Arquivo criado com sucesso'
                                  :
                                  'Ocorreu algum erro ao criar o arquivo';

echo "<br/>";

unlink('teste.txt');
echo (file_exists('teste.txt')) ? 'Ocorreu algum erro ao deletar o arquivo'
                                  :
                                   'Arquivo deletado com sucesso';

echo "<br/>";
