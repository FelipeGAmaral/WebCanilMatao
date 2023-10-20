<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/css.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <title>HOME</title>

</head>

<body style="background-image:url(img/fundocanil.png); background-size:cover;">

    <nav>
      <?php
      include_once("menu.html");
      ?>
    </nav>

  <table class="table table-bordered table-dark">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Idade</th>
        <th scope="col">Sexo</th>
        <th scope="col">Porte</th>
        <th scope="col">Raça</th>
        <th scope="col">Cor</th>
        <!-- <th scope="col">Data de Adoção</th> -->
      </tr>
    </thead>
    

    <tbody>
    <?php
    include_once("conexao.php");
    $stmt = "select * from tbanimais;";
    $resultado = mysqli_query($conn, $stmt);
    if (mysqli_num_rows($resultado)>0){
      while ($animal = mysqli_fetch_assoc($resultado)){
        echo "
        <tr>
      <th scope='row'>".$animal['codanimal']."</th>
      <td>".$animal['nome']."</td>
      <td>".$animal['idade']."</td>
      <td>".$animal['sexo']."</td>
      <td>".$animal['porte']."</td>
      <td>".$animal['raca']."</td>
      <td>".$animal['cor']."</td>
      <td><a href='editaanimal.php?codanimal=".$animal['codanimal']."' class='btn btn-success btm-sm'></button><i class='bi bi-pencil-square'></i></td>
      <td><a href='excluir.php?codanimal=".$animal['codanimal']."' class='btn btn-danger btn-sm'><i class='bi bi-trash3-fill'></i></td>
    </tr>
    ";
      }
    }else{
      echo "<p>Nenhum animal cadastrado</p>";
    }
    mysqli_close($conn);
    ?>
 </tbody>
</table>


</body>

</html>