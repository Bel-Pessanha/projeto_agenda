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

<header>
    <button>
        <a href="desconectar.php">SAIR</a>
    </button>

    <button>
        <a href="perfil.php">PERFIL</a>
    </button>
</header>

<body>
    <?php
    while ($anotacao = mysqli_fetch_array($resultado)) {
        $id = $anotacao['id'];
    ?>

        <div class="wrapper02">
            <a href="#modal-<?php echo $id; ?>">

                <h3><?php echo $anotacao["titulo"]; ?></h3>
                <p><?php echo $anotacao['texto']; ?></p>

            </a>
        </div>

        <div id="modal-<?php echo $id; ?>" class="modal">
            <div class="modal__conteudo">
                <h1>ANOTAÇÃO</h1>

                <p>Teste de formulário em um modal!</p>

                <form action="atualiza_anotacao.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">


                    <label for="titulo">Título</label>
                    <input type="text" name="titulo" value="<?php echo $anotacao["titulo"]; ?>">

                    <label for="texto">Texto</label>
                    <textarea name="texto"><?php echo $anotacao["texto"]; ?></textarea>

                    <label for="data">Data</label>
                    <input type="date" name="data" value="<?php echo $anotacao["data_informacao"]; ?>">

                    <input type="submit" value="Salvar">

                </form>

                <form action="excluir_anotacao.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <input type="submit" value="Excluir">
                </form>

                <a href="#" class="modal__fechar">&times;</a>
            </div>
        </div>
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
                <textarea name="texto" id="idTexto"></textarea>

                <label for="data">Data</label>
                <input type="date" name="data" id="idData">

                <input type="submit" value="Criar">

            </form>

            <a href="#" class="modal__fechar">&times;</a>
        </div>
    </div>

</body>

</html>