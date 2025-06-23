<?php

include 'conectar.php';

$nome =$_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$datanasc = $_POST['nascimento'];

$senha = $_POST['senha'];
$senha02 = $_POST['senha02'];

if($senha !== $senha02){
    echo ' Sua nova senha está diferente nos campos abaixo';
}else{


$query = "UPDATE usuario SET nome = '$nome', sobrenome = '$sobrenome', datanasc = '$datanasc' WHERE id = '".$_SESSION['id'] ."';";
mysqli_query($con, $query);


}



header('location:perfil.php');