<?php

/*CRUD (Create, Read, Update, Delete) é um acrônimo para as maneiras de se 
operar em informação armazenada.
*/

require('config.php');

$sql = $pdo->query("SELECT * FROM usuarios");
$sql = $sql->fetchAll(PDO::FETCH_ASSOC);
//se quiser o $sql como object basta fazer $sql = (object) $sql;
?>

<a href="adicionar.php">AdicionarUsuario</a>

<table border="1" width="100%">
    
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Email</th>
    </tr>

    <?php foreach($sql as $item) : ?>
        <tr>
            <td><?= $item['id'] ?></td>
            <td><?= $item['nome'] ?></td>
            <td><?= $item['email'] ?></td>
            <td>
                <a href="editar.php?id=<?=$item['id'];?>">Editar</a>
                <a href="excluir_action.php?id=<?=$item['id'];?>" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
            </td>
        </tr>
    <?php endforeach; ?>

</table>