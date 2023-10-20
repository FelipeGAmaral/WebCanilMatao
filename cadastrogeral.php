<?php

//Lendo os dados do formulario
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$telefone = $_POST['telefone'];

//conectando ao banco de dados
include_once("conexao.php");

//comando sql de insert
$stmt = "insert into bd values (null, '$nome', '$email', '$senha', '$telefone');";

//executando o comando SQL
if(mysqli_query($conn,$stmt)){
    header('Location: telaexibir.php');
}else{
    echo "Erro ao cadrastrar-se.<br>".mysqli_error($conn);
    echo "<br><a href='cadastro.php'>Voltar</a>";
}

//fechando o BD
mysqli_close($conn);

?>