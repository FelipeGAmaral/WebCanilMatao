<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tela de login</title>
    <link rel="stylesheet" href="CSS/css.css">
    <link rel="stylesheet" href="CSS/swiper-bundle.min.css">
    <link rel="JavaScript" href="JS/script.js">
    <link rel="JavaScript" href="JS/swiper-bundle.min.js">
</head>
    
        <body>
            <div id="menu2">
                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="quemsomos.php">Quem Somos</a></li>
                        <li><a [class]="login" href="login.php">Login</a></li>
                        <li><a [class]="cadastro" href="cadastro.php">Cadastre-se</a></li>
                        <li><a href="contato.php">Contato</a></li>
                    </ul>
                </nav>
            </div>
   
    <div id="texto-home">
    
    <div class="page">
        <form method="POST" class="formLogin">
            <h1>Login</h1>
            <p>Digite os seus dados de acesso no campo abaixo.</p>
            <label for="email">E-mail</label>
            <input type="email" placeholder="Digite seu e-email" autofocus="true" />
            <label for="password">Senha</label>
            <input type="password" placeholder="Digite sua senha" />
            <a href="/">Esqueci minha senha</a>
            <input type="submit" value="Acessar" class="btn" />
        </form>
    </div>
    <a id="voltar" href="index.html">VOLTAR</a>
</body>
</html>