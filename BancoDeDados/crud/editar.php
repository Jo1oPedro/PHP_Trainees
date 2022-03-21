<?php

require('config.php');

$id = filter_input(INPUT_GET, 'id');
if(!$id) {
    header("Location:main.php");
    exit;
} 

$sql = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
$sql->bindValue(':id', $id);
$sql->execute();

$sql = $sql->fetch( PDO::FETCH_ASSOC ); // para fazer com que $sql passe a ter os objetos e não mais a query é nessecario utilizar do método fetch()/fetchAll(), com ou sem o PDO::FETCH_ASSOC

?>

<h1> Editar usuario </h1>

<form method="POST" action="editar_action.php">

    <input type="hidden" name="id" value="<?=$id;?>" />

    <label>
        Nome:<br/>
        <input type="text" name="name" value="<?=$sql['nome']?>"/>
    </label>
    
    </br>

    <label>
        E-mail:<br/>
        <input type="email" name="email" value="<?=$sql['email']?>"/>
    </label>

    </br>
    
    <input type="submit" value="Salvar" />
</form>