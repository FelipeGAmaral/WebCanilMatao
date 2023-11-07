<?php

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $sexo = $_POST['sexo'];
    $porte = $_POST['porte'];
    $raca = $_POST['raca'];
    $cor = $_POST['cor'];
    $sobre = $_POST['sobre'];
    $foto1 = $_FILES ['foto1'];
    $foto2 = $_FILES ['foto2'];
    $foto3 = $_FILES ['foto3'];

    include_once("conexao.php");


    $stmt = "insert into tbanimais values (null, '$nome', $idade, '$sexo', '$porte', '$raca', '$cor', '$sobre');";

    if(mysqli_query($conn, $stmt)){
        
        $ultimo = 'select max(codanimal) as ult from tbanimais ';
        $resultado = mysqli_query($conn,$ultimo);
        $ult = mysqli_fetch_assoc($resultado);
        
    
        $ext = pathinfo($_FILES['foto1']['name'],PATHINFO_EXTENSION);
        $novo_nome1 = $ult['ult']."1.".$ext;
        $dir='img/';
        move_uploaded_file($_FILES['foto1']['tmp_name'],$dir.$novo_nome1);

        $ext = pathinfo($_FILES['foto2']['name'],PATHINFO_EXTENSION);
        $novo_nome2 = $ult['ult']."2.".$ext;
        move_uploaded_file($_FILES['foto2']['tmp_name'],$dir.$novo_nome2);

        $ext = pathinfo($_FILES['foto3']['name'],PATHINFO_EXTENSION);
        $novo_nome3 = $ult['ult']."3.".$ext;
        move_uploaded_file($_FILES['foto3']['tmp_name'],$dir.$novo_nome3);
        header('Location: animaisadocao.php');

    }else{
        echo "Erro ao cadastrar animal.<br>".mysqli_error($conn);
        echo "<br><a href='adocao.php'>Voltar</a>";
    }

    

    // Fechar a conexão com o banco de dados
    mysqli_close($conn);

?>



