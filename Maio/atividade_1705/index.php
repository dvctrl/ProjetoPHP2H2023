<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário php </title>
</head>
<body>
    <Form action="verifica-usuario.php" method="post">
        <label for="email">E-mail:</label><input type="email" name="nome-usu" placeholder="insira seu email" autocomplete="off">
        <label for="senha">Senha:</label><input type="password" name="senha-usu" maxlength="8" placeholder="insira sua senha">

        <input type="Submit" name="btnForm">
    </form>    
</body>
</html>