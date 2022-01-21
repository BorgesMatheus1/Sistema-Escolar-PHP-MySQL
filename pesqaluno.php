<?php
    $query = "SELECT * FROM ALUNOS ORDER BY nome";
    $title = "Lista Geral";
    if(isset($_POST['buscar'])){
        $nome = isset($_POST['nome'])?$_POST['nome']:null;
        $query = 'SELECT * FROM alunos WHERE nome LIKE "'.$nome.'%" ORDER BY nome';
        $title = 'Resultado da Busca "'.$nome.'"';
    }
?>

<form action="alunos.php" method="post">
    <label for="nome">Pesquisar por nome: </label>
    <input type="text" name="nome" id="nome">
    <button type="submit" name="buscar">Buscar</button>
</form>