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
        <input type="text" name="email" id="idEmail">

        <label for="nome"> Nome </label>
        <input type="text" name="nome" id="idNome">

        <label for="sobrenome"> Sobrenome </label>
        <input type="text" name="sobrenome" id="idSobrenome">

        <label for="nascimento"> Nascimento </label>
        <input type="date" name="nascimento" id="idNascimento">

        <label for="senha"> Senha </label>
        <input type="text" name="senha" id="idSenha">

        <input type="submit" value="Cadastrar">

    </form>

</body>

</html>