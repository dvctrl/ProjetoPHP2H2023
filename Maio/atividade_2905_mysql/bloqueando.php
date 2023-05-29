<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    session_start();

    $_SESSION["nome"] = $_POST["nome"];

    $_SESSION["senha"] = $_POST["senha"];
    
    ?>
<body>
    <b>Funcionário: </b><?php echo $_SESSION['nome'] ?>, logado com sucesso <br>
    <b>Data de Conexão: </b><?php echo date("d/m/Y") ?><br>
    <b>Hora de Conexão: </b><?php echo date("H:i:s") ?><br>


    <a href="sessoes_verifica_sessoes.php">área do administrador</a>

</body>
</html>