<?php
session_start();

if (!isset($_SESSION["id"])) {
    header("Location:login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area restrita</title>

</head>

<body>
    <?php
    include("../Cabecalho.html")
    ?>
    <section>

        <h1>Olá,<?= $_SESSION["nome"] ?></h1>

        <p><a href="logout.php">Sair</a></p>
    </section>
</body>

</html>