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

<body style="background-image:url(img/fundocanil.png); background-size:cover;">
  <div class="container-fluid">
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="quemsomos.php">Quem Somos</a></li>
        <li><a href="queroajudar.php">Quero Ajudar</a></li>
        <li><a href="contato.php">Contato</a></li>
      </ul>
    </nav>
  </div>

  <img class="img2" src="IMG/anuncio.jpg" alt=""><br>
  </div>
  <div class="container">


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
                              <img src="./IMG/cachorro1.jpg" class="card-img-top" alt="...">
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

    <nav aria-label="...">

    </nav>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>