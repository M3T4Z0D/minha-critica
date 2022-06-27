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
        <object width="100%"  height="100%" data="../../nav__menu.php"></object>
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

    <form class="media" action="http://localhost:8081/progweb/cadastro_de_midia/filme" method="post" id="mediaForm">
        <div class="image">
            <img src="../public/img/no-media.png" id="preview">
            <input class="fileInput" type="file" id="imgPoster" name="Poster" accept="image/*">
        </div>
        <div class="inputs">
            <span id="spanInfo1">Título</span>
            <input class="informationInput" type="text" id="inputInfo1" name="name"><br><br>
            <span id="spanInfo2">Sinopse</span>
            <textarea class="informationInput" name="sinopse" id="inputInfo2" rows="10"></textarea><br><br>
            <span id="spanInfo3">Ano de lançamento</span>
            <input class="informationInput" type="text" id="inputInfo3" name="releaseDate"><br><br>
            <span id="spanInfo4">Gênero</span>
            <input class="informationInput" type="text" id="inputInfo4" name="genre"><br><br>
            <span id="spanInfo5">Elenco</span>
            <input class="informationInput" type="text" id="inputInfo5" name="cast"><br><br>
            <span id="spanInfo6">Duração</span>
            <input class="informationInput" type="text" id="inputInfo6" name="movieLength"><br><br>
            <input class="sendButtons" type="submit" value="Adicionar">
            <input class="sendButtons" type="button" value="Cancelar" onclick="cancel()">
        </div>
    </form>

</body>
<script src="../public/js/media_reg.js"></script>
</html>