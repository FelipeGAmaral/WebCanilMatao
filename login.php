<?php
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];


if($usuario == "admin" && $senha == "123"){
    session_start();
    $_SESSION['usuario'] = $usuario;
    header("location:animaisadocao.php");
    echo "OK";
}else{
    echo "Erro";
}

?>