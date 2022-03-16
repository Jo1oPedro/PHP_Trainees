<?php
    if(file_exists('nomes.txt'))
    {
        $nomes = file_get_contents('nomes.txt');
        $nomes = explode("\n", $nomes);
    }
?>

<form method="POST" action="ValidaNome.php">
    <label>
        <h1>Novo nome:</h1>
        <input type="text" name="nome">
    </label>

    <input type="submit" value="enviar">
</form>

<h1> Lista de nomes </h1>
</hr>
<ul>
    <?php foreach($nomes as $nome): ?> 
        <li><?= $nome ?></li>
    <?php endforeach; ?>
</ul>