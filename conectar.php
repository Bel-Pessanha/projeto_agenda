
<?php
$con = mysqli_connect("localhost","root","","agenda01");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

session_start();//habilitar o uso de sessao no meu sistema.
if ($_SESSION == null){


}
else{

$query = "select * from usuario where id = " . $_SESSION['id'];
$retorno = mysqli_query($con, $query);
$array = mysqli_fetch_array($retorno);
}
//$conexao = mysqli_connect("localhost", "root", "", "projeto01", "");
//mysqli_query($conexao, "SET NAMES 'utf8' COLLATE 'utf8_unicode_ci'");
