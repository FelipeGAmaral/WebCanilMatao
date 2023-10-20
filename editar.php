<?php
$codanimal = $_GET['codanimal'];
$nome = $_GET['nome'];
$idade = $_GET['idade'];
$sexo = $_GET['sexo'];
$porte = $_GET['porte'];
$raca = $_GET['raca'];
$cor = $_GET['cor'];

include_once("conexao.php");

$stmt = "update tbanimais set nome = '$nome', idade = '$idade', sexo = '$sexo', porte = '$porte', raca = '$raca', cor = '$cor' where codanimal = $codanimal;";

if (mysqli_query($conn, $stmt)) {
    header('Location: animaisadocao.php');
} else {
    echo "Erro ao alterar dados do animal.<br>" . mysqli_error($conn);
    echo "<br><a href='animaisadocao.php'>Voltar</a>";
}

// Fechar a conexão com o banco de dados
mysqli_close($conn);
?>
