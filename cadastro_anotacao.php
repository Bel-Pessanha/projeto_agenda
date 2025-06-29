<?php

include 'conectar.php';

$titulo = $_POST['titulo'];
$texto = $_POST['texto'];
$data = $_POST['data'];


$query = "insert into anotacao values (default,'$titulo','$texto','$data',  '" . $_SESSION['id'] . "' );";
mysqli_query($con, $query);

header('location:inicio.php');
