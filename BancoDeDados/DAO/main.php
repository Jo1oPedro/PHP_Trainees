<?php

/*CRUD (Create, Read, Update, Delete) é um acrônimo para as maneiras de se 
operar em informação armazenada.
*/

require('config.php');
require('dao/UsuarioDAOMysql.php');

$usuarioDao = new UsuarioDaoMysql($pdo);

$lista = $usuarioDao->findAll();

?>

<a href="adicionar.php">AdicionarUsuario</a>

<table border="1" width="100%">
    
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>

    <?php foreach($lista as $usuario) : ?>
        <tr>
            <td><?= $usuario->getId() ?></td>
            <td><?= $usuario->getNome() ?></td>
            <td><?= $usuario->getEmail() ?></td>
            <td>
                <a href="editar.php?id=<?=$usuario->getId();?>">Editar</a>
                <a href="excluir_action.php?id=<?=$usuario->getId();?>" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
            </td>
        </tr>
    <?php endforeach; ?>

</table>