<?php
include 'conectar.php';
?>

<html>

<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="estilo/estilo02.css">
</head>

<body id="body01">

    <header>
        <button>
            <a href="inicio.php">INICIO</a>
        </button>
        <button>
            <a href="desconectar.php">SAIR</a>
        </button>
    </header>

    <div class="wrapper">

        <h1>Lembretes Compartilhados</h1>

    </div>

    <?php
    /* verifica todos os vinculos como id deste usuario  */
    $query = "select * from vinculo where compa_anot = " . $_SESSION['id'];
    $resultado = mysqli_query($con, $query);

    /* enquanto tiver vinculos ele pega a anotação conforme o id de anotação no vinculo */
    while ($anotacoes = mysqli_fetch_array($resultado)) {
        $query02 = "SELECT * FROM anotacao WHERE id = " . $anotacoes['anota_vinculo'];
        $resultado02 = mysqli_query($con, $query02);

        while ($anotacao = mysqli_fetch_array($resultado02)) {
            $id = $anotacao['id'];
    ?>

            <div class="wrapper02">
                <a href="#modal-<?php echo $id; ?>">

                    <h3><?php echo $anotacao["titulo"]; ?></h3>
                    <p id="nota"><?php echo $anotacao['texto']; ?></p>

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

                        <label for="hora">Horário</label>
                        <input type="time" name="hora" id="idHora" value="<?php echo $anotacao['hora'] ?>">

                        <label for="repetir">Repetir</label>
                        <select name="repetir" id="idRepetir">
                            <option value="<?php echo $anotacao['repetir'] ?>"><?php echo $anotacao['repetir'] ?></option>
                            <option value="nao">Não</option>
                            <option value="dia">Dia</option>
                            <option value="semana">Semana</option>
                            <option value="mes">Mês</option>
                            <option value="ano">Ano</option>
                        </select>

                        <label for="compa"> E-mail para Compartilhar</label>
                        <input type="email" name="compa" value="<?php echo $anotacao["compartilha"]; ?>">

                        <label for="natureza">Natureza</label>
                        <select name="natureza" id="idNatureza">
                            <option value="<?php echo $anotacao['natureza'] ?>"><?php echo $anotacao['natureza'] ?></option>
                            <option value="visualizar">Visualizar</option>
                            <option value="editar">Editar</option>

                        </select>

                    </form>


                    <a href="#" class="modal__fechar">&times;</a>
                </div>
            </div>
    <?php
        };
    };
    ?>

</body>

</html>