<?php
$msg = null;
$invalid = true;

if (isset($_POST['cadastrar']))
{
    include 'getinput.php';
    $matricula = getinput('matricula');
    $nome = getinput('nome');
    $endereco = getinput('endereco');
    $cidade = getinput('cidade');
    $codCurso = getinput('codCurso');

    include "..\conection.php";

    $query = "INSERT INTO alunos(matricula, nome, endereco, cidade, codcurso) VALUES('$matricula', '$nome', '$endereco', '$cidade', '$codCurso');";
    
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

    <form action="cadaluno.php" method="post">
        <fieldset>
            <legend>Cadastro de Alunos</legend>
            <div>
                <label for="matricula">Matrícula</label>
                <input type="text" name="matricula" id="matricula">
            </div>
            <div>
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome">
            </div>
            <div>
                <label for="endereco">Endereço</label>
                <input type="text" name="endereco" id="endereco">
            </div>
             <div>
                <label for="cidade">Cidade</label>
                <input type="text" name="cidade" id="cidade">
            </div>
             <div>
                <label for="codCurso">Código do Curso</label>
                <input type="text" name="codCurso" id="codCurso">
            </div>
            <button type="submit" name="cadastrar">Cadastrar</button>
        </fieldset>
        <?php
            if (!$msg == null)
            {
                echo"<fieldset><p>$msg</p></fieldset>";
            }
        ?>
    </form>
    <a href="..\index.html">Página Inicial</a>
</body>
</html>