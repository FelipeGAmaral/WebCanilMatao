<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/css.css">
  <title>HOME</title>
</head>

<style>
  .coluna {
    display: inline-block;
    width: 50%;
    padding: 20px;
    box-sizing: border-box;
  }

  .quadro-branco {
    background-color: white;
    padding: 20px;
    text-align: center;
    margin: 5%;
    border-radius: 7px;
    border-style: solid;
    text-align: justify;
    text-justify: inter-word;
  }

  .quadrobrancoimg {
    background-color: white;
    padding: 10px;
    text-align: center;
    margin: 5%;
    border-radius: 7px;
    border-style: solid;
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
  <div id="texto-home">

    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="quemsomos.php">Quem Somos</a></li>
        <li><a [class]="login" href="login.php">Login</a></li>
        <li><a [class]="cadastro" href="cadastro.php">Cadastre-se</a></li>
        <li><a href="contato.php">Contato</a></li>
      </ul>
    </nav>

    <img class="img2" src="../backup/IMG/can.jpg" alt=""><br>

    <div class="colunm">
      <div class="quadro-branco">
        <div class="conteudo">
          <p class="quemsomos">Quem somos nós?</p>
          <p class="sobrenostxt">
            Há mais de duas décadas, o Canil Municipal de Matão tem uma história profundamente enraizada, dedicada a oferecer assistência a cães e gatos em situações vulneráveis. Estes incluem animais doentes, filhotes frágeis, idosos e aqueles com deficiências, que são encontrados pelas ruas da cidade.

            Além de servir como um refúgio para a recuperação desses companheiros de quatro patas, o canil desempenha um papel significativo como um centro de cuidados de saúde animal. Ele providencia serviços ambulatoriais essenciais para cães e gatos, especialmente dirigidos a tutores cadastrados junto à Secretaria do Meio Ambiente, que enfrentam limitações financeiras.

            Uma outra notável ação do canil é a sua dedicação à castração, tanto para animais de rua quanto para os tutores que estão cadastrados. Essa abordagem é crucial para controlar a população de animais abandonados, enquanto também promove o bem-estar geral dos bichinhos de estimação.

            Em síntese, o Canil Municipal de Matão é uma instituição com mais de duas décadas de compromisso firme com animais que carecem de auxílio, proporcionando não apenas um refúgio, mas também serviços médicos e programas de castração. Essas ações colaboram para elevar a qualidade de vida dos animais e fomentar uma comunidade mais consciente e responsável em relação aos nossos adoráveis amigos de quatro patas.
          </p>
        </div>
      </div>
      <div class="imagem-canil">
        <img class="canil" src="../backup/IMG/canil.jpeg" alt="Canil Municipal de Matão">
      </div>
    </div>


    <!---->

</body>

</html>