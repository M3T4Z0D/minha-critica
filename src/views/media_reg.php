<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Register</title>
    <link href="../public/css/media_reg.css" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/navbar.css">

</head>
<body>
    <nav>
        <div class="nav__logo">
            <span class="logo__text">MINHA CRÍTICA</span>
        </div>

        <div class="nav__menu">
            <a href="../../index.html" class="menu__item">Home</a>
            <a href="#" class="menu__item">Filmes</a>
            <a href="#" class="menu__item">Séries</a>
            <a href="#" class="menu__item">Livros</a>
            <a href="#" class="menu__item">Busca Avançada</a>
        </div>

        <div class="nav_actions">
            <a href="./login.html">Entrar</a>
            <a href="./register_page.html">Registrar</a>
        </div>
    </nav>
    <div class ="corpo">
        <form id="selecao">
            <label for="media">Qual o tipo de mídia que você deseja cadastrar?</label>
            <select class="select" name="media" id="media">
                <option value="filme">Filme</option>
                <option value="série">Série</option>
                <option value="livro">Livro</option>
            </select>
            <br><br>
            <input class="sendButtons" type="button" value="Continuar" onclick="showMedia()">
        </form>
    </div>

    <form class="media" action="#" method="post">
        <div class="image">
            <img src="../public/img/no-media.png">
            <input class="fileInput" type="file" id="imgPoster" name="Poster" accept="image/*">
        </div>
        <div class="inputs">
            <span id="spanInfo1">Título</span>
            <input class="informationInput" type="text" id="inputInfo1" name="Titulo"><br><br>
            <span id="spanInfo2">Sinopse</span>
            <textarea class="informationInput" name="sinopse" id="inputInfo2" rows="10"></textarea><br><br>
            <span id="spanInfo3">Ano de lançamento</span>
            <input class="informationInput" type="text" id="inputInfo3" name="Ano"><br><br>
            <span id="spanInfo4">Gênero</span>
            <input class="informationInput" type="text" id="inputInfo4" name="Gênero"><br><br>
            <span id="spanInfo5">Elenco</span>
            <input class="informationInput" type="text" id="inputInfo5" name="Elenco"><br><br>
            <span id="spanInfo6">Duração</span>
            <input class="informationInput" type="text" id="inputInfo6" name="Duraçao"><br><br>
            <input class="sendButtons" type="submit" value="Adicionar">
            <input class="sendButtons" type="button" value="Cancelar" onclick="cancel()">
        </div>
    </form>

</body>
<script src="../public/js/media_reg.js"></script>
</html>