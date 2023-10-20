<?php

//Lendo os dados do formulario
$nome = $_POST['nome'];
$senha = trim(password_hash($_POST['senha'], PASSWORD_DEFAULT));


//conectando ao banco de dados
include_once("conexao.php");

//comando sql de insert
$stmt = "insert into tbloginadm values ('$nome','$senha', 'u', 'n');";

//executando o comando SQL
if(mysqli_query($conn,$stmt)){
    header('Location: loginadm.php');
}else{
    header("location:loginadm.php");
}


?>