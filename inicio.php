<?php

include 'conectar.php';

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/estilo02.css">
    <title>página 01</title>
</head>

<?php
$query = "select * from anotacao where criador = " . $_SESSION['id'];
$resultado = mysqli_query($con, $query);
?>

<body id="body01">

    <header>
        <button>
            <a href="convites.php">CONVITES</a>
        </button>
        <button>
            <a href="perfil.php">PERFIL</a>
        </button>
        <button>
            <a href="desconectar.php">SAIR</a>
        </button>


    </header>

    <a href="#demo-modal">
        <div class="wrapper">

            <h1>Criar Anotação</h1>

        </div>
    </a>

    <div id="demo-modal" class="modal">

        <div class="modal__conteudo">
            <h1>ANOTAÇÃO</h1>
            <p>Teste de formulário em um modal!</p>

            <form action="cadastro_anotacao.php" method="post">

                <label for="titulo">Titulo</label>
                <input type="text" name="titulo" id="idTitulo" required>

                <label for="texto">Texto</label>
                <textarea name="texto" id="idTexto"></textarea>

                <label for="data">Data</label>
                <input type="date" name="data" id="idData">

                <label for="hora">Horário</label>
                <input type="time" name="hora" id="idHora">

                <label for="repetir">Repetir</label>
                <select name="repetir" id="idRepetir">
                    <option value="nao">Não</option>
                    <option value="dia">Dia</option>
                    <option value="semana">Semana</option>
                    <option value="mes">Mês</option>
                    <option value="ano">Ano</option>
                </select>

                <label for="compa"> E-mail para Compartilhar</label>
                <input type="email" name="compa" id="idcompa">

                <label for="natureza">Natureza</label>
                <select name="natureza" id="idNatureza">
                    <option value=""></option>
                    <option value="visualizar">Visualizar</option>
                    <option value="editar">Editar</option>

                </select>

                <input type="submit" value="Criar">

            </form>

            <a href="#" class="modal__fechar">&times;</a>
        </div>
    </div>
    <div class="teste">
        <?php
        while ($anotacao = mysqli_fetch_array($resultado)) {
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

    </div>

</body>

</html>