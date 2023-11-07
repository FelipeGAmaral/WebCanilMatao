<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HOME</title>
  <link rel="stylesheet" href="CSS/css.css">
  <link rel="stylesheet" href="CSS/swiper-bundle.min.css">
  <link rel="JavaScript" href="JS/script.js">
  <link rel="JavaScript" href="JS/swiper-bundle.min.js">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<style>
  footer {
  padding: 1rem 0;
  text-align: center;
  background-color: #2ba72b;
}

  .quadro-branco {
    background-color: white;
    padding: 20px;
    text-align: center;
    margin-right: 5%;
    border-radius: 7px;
    text-align: justify;
    text-justify: inter-word;
    box-shadow: -4px 4px 4px 4px rgba(0, 0, 0, 0.7);
  }

  .quadrobrancoimg {
    background-color: white;
    padding: 10px;
    text-align: center;
    margin: 5%;
    border-radius: 7px;
    
  }

  .quadro-branco img {
    max-width: 100%;
    max-height: 100%;
    
  }

  .quemsomos {
    color: #32CD32;
    text-align: left;
    font-size: 30px;

  }
</style>


<body style="background-image:url(img/fundocanil.png); background-size:cover;">
<div class="container-fluid; padding-left:40px;" >
    <nav style="padding: 5px;">
      <ul style= "padding-top: 8px;">
        <li><a style = "text-decoration:none; color: #ffff" href="index.php">Home</a></li>
        <li><a style = "text-decoration:none; color: #ffff" href="quemsomos.php">Quem Somos</a></li>
        <li><a style = "text-decoration:none; color: #ffff" href="queroajudar.php">Quero Ajudar</a></li>
        <li><a style = "text-decoration:none; color: #ffff" href="contato.php">Contato</a></li>
      </ul>
    </nav>
  </div>

  <img class="img2" src="IMG/anuncio.jpg" alt="" style=" box-shadow: -4px 4px 4px 4px rgba(0, 0, 0, 0.7);"><br>
  </div>
  <div class="container">

  <div class="quadro-branco">
    <div class="cardhome">
      <div class="row row-cols-1 row-cols-md-5 g-4">
        <?php
        include_once("conexao.php");

        //$resultado = mysqli_query($conn, $stmt);
        //Páginação de dados
        $total_reg = 10; //Número de registros exibidos por página
        if (isset($_GET['pagina'])) {
          $pc = $_GET['pagina'];
        } else {
          $pc = 1;
        }

        $inicio = $pc - 1;
        $inicio = $inicio * $total_reg;


        $buscatodos = "select * from tbanimais;";
        $buscalimite = "select * from tbanimais LIMIT $inicio,$total_reg";
        $limite = mysqli_query($conn, $buscalimite);
        $todos = mysqli_query($conn, $buscatodos);

        $tr = mysqli_num_rows($todos); // verifica o número total de registros
        $tp = $tr / $total_reg; // verifica o número total de páginas$inicio = $inicio * $total_reg;

        if (mysqli_num_rows($limite) > 0) {
          while ($animal = mysqli_fetch_assoc($limite)) {
            echo '
                      <div class="col">
                          <div class="card">
                          <a href="teladocachorro.php?codanimal='.$animal['codanimal'].'">
                              <img src="./IMG/'.$animal['codanimal'].'1.jpg" class="card-img-top" alt="...">
                              </a>
                              <div class="card-body">
                              <h5 class="card-title">Nome: ' . $animal['nome'] . '</h5>
                                  <h5 class="card-title">Idade: ' . $animal['idade'] . ' anos</h5>
                                  <h5 class="card-title">Sexo: ' . $animal['sexo'] . '</h5>
                              </div>
                          </div>
                      </div>
                  ';
          }
        } else {
          echo "<p>Nenhum animal cadastrado</p>";
        }
        $anterior = $pc - 1;
        $proximo = $pc + 1;


        ?>
      </div>
      </div>
    </div>
  </div>
  <br>
  <!-- Páginação de dados -->
  <div class="container">
    <ul class="pagination">
      <li class="page-item">
        <?php
        if ($pc > 1) {
          echo "<a class='page-link' href='index.php?pagina=$anterior' tabindex='-1'>Anterior</a>";
        } else {
          echo "<a class='page-link disabled' href='index.php?pagina=$anterior' tabindex='-1'>Anterior</a>";
        }
        ?>

      </li>
      <?php
      if ($pc > 1) {
        echo "<li class='page-item'><a class='page-link' href='index.php?pagina=$anterior'>$anterior</a></li>";
      }
      ?>

      <li class="page-item active">
        <a class="page-link"><?php echo $pc; ?> <span class="sr-only"></span></a>
      </li>
      <?php
      if ($pc < $tp) {
        echo "<li class='page-item'><a class='page-link' href='index.php?pagina=$proximo'>$proximo</a></li>";
      }
      ?>

      <li class="page-item">
        <?php
        if ($pc < $tp) {
          echo "<a class='page-link' href='index.php?pagina=$proximo'>Próximo</a>";
        } else {
          echo "<a class='page-link disabled' href='index.php?pagina=$proximo'>Próximo</a>";
        }

        ?>
      </li>
    </ul>
  </div>
  <!-- Fim paginação de dados -->

  <div class="container-fluid">


  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

  <footer style="position: absolute; width: -webkit-fill-available;">
      <div class="grid">
        <div class="column-xs-12">
          <p class="copyright" style="color: aliceblue;">&copy; Copyright 2018
        </div>
      </div>
    </footer>

</body>

</html>