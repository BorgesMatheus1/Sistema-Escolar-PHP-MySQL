<?php
$msg = null;
$invalid = true;

if (isset($_POST['cadastrar']))
{
    include "getinput.php";

    $cod = getInput('cod');
    $nome = getInput('nome');


    include "..\conection.php";

    $query = "INSERT INTO disciplinas(coddisciplina, nome) VALUES('$cod', '$nome');";

    if(!$invalid && mysqli_query($conn, $query))
    {
        $msg = "Cadastro realizado!.";
    }
    else
    {
        $msg = "Erro no cadastro! Confira os dados e tente novamente...";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\css\style.css">
    <title>Sistema Escolar</title>
</head>
<body>
<h1>Sistema Escolar</h1>

    <form action="caddisc.php" method="post">
        <fieldset>
            <legend>Cadastro de Disciplinas</legend>
            <div>
                <label for="cod">Código da Disciplina</label>
                <input type="text" name="cod" id="cod">
            </div>
            <div>
                <label for="nome">Nome da Disciplina</label>
                <input type="text" name="nome" id="nome">
            </div>
            <button type="submit" name="cadastrar">Cadastrar</button>
        </fieldset>
    </form>
    <?php
        if (!$msg == null)
        {
            echo"<fieldset><p>$msg</p></fieldset>";
        }
    ?>
    <a href="..\index.html">Página Inicial</a>
</body>
</html>