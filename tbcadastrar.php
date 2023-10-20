<?php

    $nome = $_GET['nome'];
    $idade = $_GET['idade'];
    $sexo = $_GET['sexo'];
    $porte = $_GET['porte'];
    $raca = $_GET['raca'];
    $cor = $_GET['cor'];

    include_once("conexao.php");

    $stmt = "insert into tbanimais values (null, '$nome', $idade, '$sexo', '$porte', '$raca', '$cor', '');";

    if(mysqli_query($conn, $stmt)){
        header('Location: animaisadocao.php');
    }else{
        echo "Erro ao cadastrar animal.<br>".mysqli_error($conn);
        echo "<br><a href='adocao.php'>Voltar</a>";
    }

    // Fechar a conexão com o banco de dados
    mysqli_close($conn);

?>