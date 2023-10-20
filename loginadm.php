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

<body style="background-image:url(img/fundopreto.png); background-size:cover;">

    <div class="loginBox"> <img class="user" src="img/semfoto.png">
        <h3>Faça o Login</h3>
        <form action="login.php" method="post">
            <div class="inputBox"> <input id="uname" type="text" name="Username" placeholder="Nome">
                <input id="pass" type="password" name="Password" placeholder="Senha">
            </div>
            <input type="submit" name="" value="Login">
        </form>
        <a href="#">Esqueceu a senha ?<br> </a>
    </div>
</body>

</html>