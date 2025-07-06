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
            <a href="inicio.php">INICIO</a>
        </button>
        <button>
            <a href="desconectar.php">SAIR</a>
        </button>
    </header>

    <?php
    while ($anotacao = mysqli_fetch_array($resultado)) {
    ?>
        <div class="wrapper03">

            <h1 id="perfil">CONVITES PARA O USUÁRIO</h1>

            <form action="#" method="post">


            </form>

        </div>
    <?php
    };
    ?>

</body>

</html>