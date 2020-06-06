<?php

    session_start();

    if(!isset($_SESSION["id"])){
        header("Location:login.php");
        exit;
    }

    include "servicos/conexao.php";
    include "classes/Usuario.php";
    $usu = new Usuario($servidor,$usuario,$senha);

    if(isset($_POST["nome"])){
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $usu->cadastro_usuario($nome,$email,$senha);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
        <input type="text" name="nome"><br>
        <input type="email" name="email"><br>
        <input type="text" name="senha"><br>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>