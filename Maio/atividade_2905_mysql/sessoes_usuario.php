<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <?php
        session_start();

        $_SESSION['nome'] = "Dvd Mouzinho da Silva Sauro";

        session_unset();
        //session_destroy();

    ?>
    <h3>Sessão de usuário</h3>
    <p>Bem vindo, Sr. <?php echo session_id();?></p>
</body>
</html>