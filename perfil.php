<?php
include 'conectar.php';
?>

<html>

<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="estilo/estilo02.css">
</head>


<?php
$query = "select * from usuario where id = " . $_SESSION['id'];
$resultado = mysqli_query($con, $query);
?>

<body id="body01">

<header>

    <button>
        <a href="desconectar.php">SAIR</a>
    </button>

    <button>
        <a href="inicio.php">INICIO</a>
    </button>

</header>

    <?php
    while ($anotacao = mysqli_fetch_array($resultado)) {
    ?>
    <div class="wrapper03">
        <form action="atualiza_perfil.php" method="post">

            <label for="email"> Email </label>
            <input type="email" name="email" value="<?php echo $anotacao["email"]; ?>" disabled>

            <label for="nome"> Nome </label>
            <input type="text" name="nome" value="<?php echo $anotacao["nome"]; ?>" required>

            <label for="sobrenome"> Sobrenome </label>
            <input type="text" name="sobrenome" value="<?php echo $anotacao["sobrenome"]; ?>" required>

            <label for="nascimento"> Nascimento </label>
            <input type="date" name="nascimento" value="<?php echo $anotacao["datanasc"]; ?>" required>

            <label for="senha"> Senha </label>
            <input type="password" name="senha" id="idSenha">

            <label for="senha02"> Confirme a Senha </label>
            <input type="password" name="senha02" id="idSenha02">

            <input type="submit" value="Salvar">

        </form>
    </div>    
    <?php
    };
    ?>

</body>

</html>