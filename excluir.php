<?php

$codanimal = $_GET['codanimal'];

include_once("conexao.php");

$stmt = "delete from tbanimais where codanimal = '$codanimal';";

if(mysqli_query($conn, $stmt)){
    header("Location: animaisadocao.php");
} else {
    echo "Erro ao apagar animal.<br>".mysqli_error($conn);
    echo "<br><a href='animaisadocao.php'>Voltar</a>";
}

mysqli_close($conn);

?>