
<?php
    include 'conectar.php';

     $email = $_POST['email'];  
     $nome = $_POST['nome'];
     $sobrenome = $_POST['sobrenome'];
     $nascimento = $_POST['nascimento'];
     $senha = $_POST['senha'];

     $sql= "select * from usuario";
     $retorno = mysqli_query($con, $sql);
     $array = mysqli_fetch_array($retorno);

  if($email == null){
    echo"Email null";
  }
  else{
    if($email == $array['email'] ){

    echo " perfil  já criado";

     }
     else{

     $query = "insert into  usuario values (default,'$email','$senha','$nome','$sobrenome','$nascimento');";
     mysqli_query($con, $query);

     header('location:index.html');
    }
  
  }
     ?>
