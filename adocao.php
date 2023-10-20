<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/css.css">
    <title>HOME</title>

</head>

<body style="background-image:url(img/fundocanil.png); background-size:cover;">

    <nav>
        <?php
        include_once("menu.html");
        ?>
    </nav>

    <div class="pageado">
        <form method="get" action="tbcadastrar.php">
            <div class="formLogin">
                <h1>Cadastro de Animal</h1>
                <p>Primeiro vamos cadastrar o seu pet!</p>
                <label for="nome">Nome do animal</label>
                <input type="text" placeholder="Digite o nome do animal" autofocus="true" name="nome"/>

                <label for="idade">Idade</label>
                <input type="text" name="idade" placeholder="Digite a idade do cachorro" />

                <label for="sexo">Sexo do animal:</label>
                <select id="sexo" name="sexo" required>
                    <option value="Macho">Macho</option>
                    <option value="Fêmea">Fêmea</option>
                </select><br>
                
                <label for="porte">Porte do Animal:</label>
                <select id="porte" name="porte" required>
                    <option value="pequeno">Pequeno</option>
                    <option value="médio">Médio</option>
                    <option value="grande">Grande</option>
                </select><br>

                <label for="raca">Raça:</label>
                <select id="raca" name="raca" required>
                    <option value="cao">Cão</option>
                    <option value="gato">Gato</option>
                </select><br>

                <label for="cor">Cor:</label>
                <select id="cor" name="cor" required>
                    <option value="Preto">Preto</option>
                    <option value="Branco">Branco</option>
                    <option value="Rajado">Rajado</option>
                    <option value="Malhado">Malhado</option>
                    <option value="Caramelo">Caramelo</option>
                    <option value="Outros">Outros</option>
                </select><br>

                <label for="descricao">Fale um pouco sobre o animal:</label>
                <textarea id="descricao" name="descricao" rows="4" cols="50"></textarea>


                <a href="/">Esqueci minha senha</a>
                <input type="submit" value="Cadastrar" class="btn" />
        </form>
    </div>





</body>

</html>