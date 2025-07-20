<?php

include 'conectar.php';

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$texto = $_POST['texto'];
$data = $_POST['data'];
$hora = $_POST['hora'];
$repetir = $_POST['repetir'];
$compa = $_POST['compa'];
$natureza = $_POST['natureza'];



$query = "UPDATE anotacao SET titulo = '$titulo', texto = '$texto', data_informacao = '$data', hora = '$hora', repetir = '$repetir', compartilha = '$compa', natureza = '$natureza' WHERE id = '$id';";
mysqli_query($con, $query);

header('location:inicio.php');
