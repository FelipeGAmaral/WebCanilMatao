<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/css.css">
    <title>Tela de Cadastro</title>
</head>

  <div id="menucont">
    <body>
        <nav>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="quemsomos.php">Quem Somos</a></li>
              <li><a [class]="login" href="login.php">Login</a></li>
              <li><a [class]="cadastro" href="cadastro.php">Cadastre-se</a></li>
              <li><a href="contato.php">Contato</a></li>
            </ul>
          </nav>
    </body>
</div>

<body class="cadastro" style="background-image:url(img/fundocanil.png); background-size:cover;">

<div class="container">
  <h1>Entre em contato conosco</h1><br>
        <form method="post" action=".php">
          <label for="nome">Nome:</label>
          <input type="text" id="nome" name="nome" required>
    
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
    
          <label for="telefone">Celular:</label>
          <input type="tel" id="telefone" name="telefone" required>

          <label for="mensagem">Mensagem:</label>
    <textarea id="mensagem" name="mensagem" rows="4" cols="50"></textarea><br>

          <input type="submit" value="Cadastrar" >
        </form>
        
</div>

<div class="container">
  <div class="colunmcontato">
    <div class="quadro-branco">
      <br><h2>Endereço</h2>
      Rua Galvão Dias, 123, Matão SP<br><br>

      <h2>Email</h2>
      BomDia123@gmail.com<br><br>

      <h2>Telefone</h2>
       9938264636<br><br>

      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1102.962900226685!2d-48.389366174594 414!3d-21.5894282510705
      26!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b91f901e6e6901%3A0x1f5087a5ce7d3d30!2sCanil%20Municipal%20de%20Mat%C3%A3o!
      5e0!3m2!1spt-BR!2sbr!4v1693777300777!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </P>
        </p><br></div>
    </div>
  </div>
</div>
</body>