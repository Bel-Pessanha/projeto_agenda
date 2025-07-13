<?php

include 'conectar.php';

$titulo = $_POST['titulo'];
$texto = $_POST['texto'];
$data = $_POST['data'];
$compa = $_POST['compa'];


$query = "insert into anotacao values (default,'$titulo','$texto','$data','$compa', '" . $_SESSION['id'] . "' );";
mysqli_query($con, $query);

if($compa != null){

// Busca o último ID da anotação criada pelo usuário
$query02 = " SELECT id FROM anotacao where criador ='" . $_SESSION['id'] . "' ORDER BY id DESC LIMIT 1 ;";
$resultado02 = mysqli_query($con, $query02);
$idAnotacao = mysqli_fetch_array($resultado02);


// Busca o ID do usuário com quem quer compartilhar
$query03 = "select * from usuario where email = '$compa'";
$resultado03 = mysqli_query($con, $query03);
$idUsuario = mysqli_fetch_array($resultado03);


// Insere o vínculo usando os valores extraídos
$query04 = "insert into vinculo values (default,'" . $_SESSION['id'] . "','" . $idUsuario['id']. "','" . $idAnotacao['id'] . "');";
mysqli_query($con, $query04);

header('location:inicio.php');

}else{

header('location:inicio.php');
}