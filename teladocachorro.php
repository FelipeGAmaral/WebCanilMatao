<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HOME</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="CSS/estilo.css">
  <link rel="stylesheet" href="CSS/swiper-bundle.min.css">
</head>


<body style="background-image:url(img/fundocanil.png); background-size:cover;">
  <nav>
    <ul>
      <li><a href="index.php">Inicio</a></li>
      <li><a href="quemsomos.php">Quem Somos</a></li>
      <li><a href="queroajudar.php">Quero Ajudar</a></li>
      <li><a href="contato.php">Contato</a></li>
    </ul>
  </nav>

  <main><section class="animal-info">
    <div class="container">
      <div class="grid second-nav">
        <div class="column-xs-12">

        </div>


        <?php
          $codanimal = $_GET['codanimal'];
          include_once('conexao.php');
          $sql = "select * from tbanimais where codanimal = $codanimal;";
          $resultado = mysqli_query($conn,$sql);
           
          $animal = mysqli_fetch_assoc($resultado);
          ?>
      </div>
      <div class="grid product">
        <div class="column-xs-12 column-md-7">
          <div class="product-gallery">
            <div class="product-image">
              <img class="active" src="IMG/<?php echo $animal['codanimal'];?>1.jpg">
            </div>
            <ul class="image-list">
              <li class="image-item"><img src="IMG/<?php echo $animal['codanimal'];?>1.jpg"></li>
              <li class="image-item"><img src="IMG/<?php echo $animal['codanimal'];?>2.jpg"></li>
              <li class="image-item"><img src="IMG/<?php echo $animal['codanimal'];?>3.jpg"></li>
            </ul>
          </div>
        </div>
        <div class="column-xs-12 column-md-5">
        <?php
          echo"       
          
            <h2>".$animal['nome']."</h2><br>
            <p>Idade: ".$animal['idade']." anos</p>
            <p>Sexo: ".$animal['sexo']."</p>
            <p>Raça: ".$animal['raca']."</p>
            ";
?>
          
          <div class="description">
            <p><?php echo $animal['sobre'];?></p>
          </div>
          <button class="add-to-cart" onclick="mostrarModal()">Quero Adotar</button>
        </div>
      </div>
    </section>

      <footer>
        <div class="grid">
          <div class="column-xs-12">
            <p class="copyright" style="color: aliceblue;">&copy; Copyright 2018 
          </div>
        </div>
      </footer>


      <!-- Modal -->
      <div id="myModal" class="modal-background" style="display:none;">
        <div class="modal-content">
          <h2>Informações importantes</h2>
          <p>Aqui estão algumas informações importantes que você precisa saber.</p>
          <p>Essas informações podem ser personalizadas de acordo com suas necessidades.</p>
          <button class="add-to-cart" onclick="fecharModal()">Fechar</button>
        </div>
      </div>



      <script src="JS/script.js"></script>
      <script src="JS/swiper-bundle.min.js"></script>

</body>



</html>