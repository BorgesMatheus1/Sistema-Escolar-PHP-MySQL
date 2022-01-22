<?php
$msg = null;
$invalid = true;

if (isset($_POST['cadastrar']))
{
    include "getinput.php";

    $codCurso = getInput('cod');
    $nome = getInput('nome');
    $disc1 = getInput('disc1');
    $disc2 = getInput('disc2');
    $disc3 = getInput('disc3');

    include "..\conection.php";

    $query = "INSERT INTO cursos(codcurso, nome, coddisc1, coddisc2, coddisc3) VALUES('$codCurso', '$nome', '$disc1', '$disc2', '$disc3');";

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

    <form action="cadcurso.php" method="post">
        <fieldset>
            <legend>Cadastro de Cursos</legend>
            <div>
                <label for="cod">Código do Curso</label>
                <input type="text" name="cod" id="cod">
            </div>
            <div>
                <label for="nome">Nome do curso</label>
                <input type="text" name="nome" id="nome">
            </div>
            <div>
                <label for="disc1">Código da Disciplina 1</label>
                <input type="text" name="disc1" id="disc1">
            </div>
            <div>
                <label for="disc2">Código da Disciplina 2</label>
                <input type="text" name="disc2" id="disc2">
            </div>
            <div>
                <label for="disc3">Código da Disciplina 3</label>
                <input type="text" name="disc3" id="disc3">
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