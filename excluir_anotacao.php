<?php

include 'conectar.php';

$id = $_POST['id'];

$query = "DELETE FROM anotacao WHERE id = '$id' AND criador = '". $_SESSION['id'] . "';";
mysqli_query($con, $query);

header('location:inicio.php');
