<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/css.css">
    <title>Tela de Cadastro</title>
</head>

<div id="menu2">
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

<body class="cadastro">    
  </div>
    <div class="container">
        <h1>Cadastro do usuário</h1><br>
        <form method="post" action="cadastrogeral.php">
          <label for="nome">Nome:</label>
          <input type="text" id="nome" name="nome" required>
    
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
    
          <label for="senha">Senha:</label>
          <input type="password" id="senha" name="senha" required>

          <label for="senha">Confirmar Senha:</label>
          <input type="password" id="senha" name="senha" required>
    
          <label for="telefone">Celular:</label>
          <input type="tel" id="Celular" name="telefone" required><br>

          <input type="submit" value="Cadastrar" >
        </form>
        
      </div>
  
</body>

</html>