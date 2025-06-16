<?php

include 'conectar.php';

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/estilo.css">
    <title>página 01</title>
</head>

<?php

$query = "select * from anotacao where criador = " . $_SESSION['id'];
$resultado = mysqli_query($con, $query);

?>

<body>
    <?php
    while ($anotacao = mysqli_fetch_array($resultado)) {
    ?>
        <div>
            <a href="#">
                <h3>
                    <label for=""><?php echo $anotacao["titulo"]; ?></label>
                </h3>
                
                <p>
                    <?php echo $anotacao['texto']; ?>
                </p>
        </div>
        <br>

    <?php
    };
    ?>

    <div class="wrapper">
        <a href="#demo-modal">Abrir Modal</a>
    </div>

    <div id="demo-modal" class="modal">

        <div class="modal__conteudo">
            <h1>ANOTAÇÃO</h1>
            <p>Teste de formulário em um modal!</p>

            <form action="cadastro_anotacao.php" method="post">

                <label for="titulo">Titulo</label>
                <input type="text" name="titulo" id="idTitulo">

                <label for="texto">Texto</label>
                <textarea name="texto" id="idTexto"> Insira seu texto aqui</textarea>

                <label for="data">Data</label>
                <input type="date" name="data" id="idData">

                <input type="submit" value="Criar">

            </form>

            <a href="#" class="modal__fechar">&times;</a>
        </div>
    </div>

</body>

</html>