<?php

include 'conectar.php';

?>

<html>

<head>
    <meta charset="utf-8" />
    <title></title>
    <link href="estilo.css" rel="stylesheet" type="text/css" />
</head>

<body>

    <form action="cadastrar.php" method="post">

        <label for="email"> Email </label>
        <input type="email" name="email" id="idEmail" required>

        <label for="nome"> Nome </label>
        <input type="text" name="nome" id="idNome" required>

        <label for="sobrenome"> Sobrenome </label>
        <input type="text" name="sobrenome" id="idSobrenome" required>

        <label for="nascimento"> Nascimento </label>
        <input type="date" name="nascimento" id="idNascimento" required>

        <label for="senha"> Senha </label>
        <input type="password" name="senha" id="idSenha" required>

        <input type="submit" value="Cadastrar">

    </form>

</body>

</html>