<?php
if(isset($_GET["opcao"]) && isset($_GET["funcao"]))
{
    if($_GET["funcao"] == "cadastrar")
    {
        switch($_GET["opcao"])
        {
            case "aluno":
                header("location: cadastrar\cadaluno.html");       
            break;
            case "curso":
                header("location: cadastrar\cadcurso.html");
            break;
            case "disciplina":
                header("location: cadastrar\caddisc.html");
            break;
        }
    }
    else if($_GET["funcao"] == "pesquisar")
    {
        switch($_GET["opcao"])
        {
            case "aluno":
                header("location: alunos.php");
            break;
            case "curso":
                header("location: cursos.php");
            break;
            case "disciplina":
                header("location: disciplinas.php");
            break;
        }
    }
    else
    {
        die("Erro no redirecionamento.");
    }
}
?>