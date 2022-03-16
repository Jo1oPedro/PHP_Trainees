<h1>Cabecalho</h1>
<?php
if(isset($_COOKIE['nome'])) {
    $nome = $_COOKIE['nome'];
    echo '<h2>'.$nome.'</h2>';
}
?>
<hr/>