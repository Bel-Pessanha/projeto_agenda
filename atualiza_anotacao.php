<?php

include 'conectar.php';

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$texto = $_POST['texto'];
$data = $_POST['data'];
$compa = $_POST['compa'];


$query = "UPDATE anotacao SET titulo = '$titulo', texto = '$texto', data_informacao = '$data', compartilha = '$compa' WHERE id = '$id';";
mysqli_query($con, $query);

header('location:inicio.php');
