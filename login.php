<?php

include 'conectar.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$query = "select * from usuario where email = '$email' and senha = '$senha';";
$retorno = mysqli_query($con, $query);
$array = mysqli_fetch_array($retorno);
$logarray = $array["nome"];

if ($logarray == null) {

    $email = null;
    $senha = null;

    header('location:index.html');
} else {

    $_SESSION['id'] = $array['id'];

    header('location:autenticacao.php');
}
