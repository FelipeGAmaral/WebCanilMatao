<?php

$nome = $_POST['nome'];
$senha = $_POST['senha'];

include_once("conexao.php");

$stmt = "select * from tbloginadm where nome = '$nome';";

$resultado = mysqli_query($conn, $stmt);

if(mysqli_num_rows($resultado) > 0) {
    $adm = mysqli_fetch_assoc($resultado);

    if ($adm['ativo'] == "n") {
        $erro = "Usuario Inativo, procure o administrador";
    } else if ($adm['ativo'] == "s") {
        if (password_verify($senha, $adm['senha'])==FALSE) {
            $erro = "Senha Incorreta";
        }
    }
} else {
    $erro = "Usuario não encontrado";
}

if(!$erro) {
    session_start();
    $_SESSION['adm'] = $adm['nome'];
    if ($usuario['tipo'] == "a") {
        $_SESSION['tipo'] = "a";
        header("location:animaisadocao.php");
    } else if ($adm['tipo'] == "u") {
        $_SESSION['tipo'] = "u";
        header("location:loginadm.php");
    }
}else{
    header("location:loginadm.php?erro=".$erro);
}