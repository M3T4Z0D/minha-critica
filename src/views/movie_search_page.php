<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Crítica</title>
    <link rel="stylesheet" href="../public/css/navbar.css">
    <link href="../public/css/movie_search_page.css" rel="stylesheet">
</head>

<body>
    <nav>
        <object width="100%" height="100%" data="../../nav__menu.php"></object>
    </nav>
    <div class="corpo">
        <div class="ordem_filtro">
            <form>
                <div class="ordem">
                    <label for="ordenar">Ordenar por:</label>
                    <select id="ordem" name="ordem"><br>
                        <option value="genero">Gênero</option>
                        <option value="mais_recentes">Mais recentes</option>
                        <option value="mais_visualizacoes">Mais visualizações</option>
                        <option value="mais_comentados">Mais comentados</option>
                    </select><br><br>
                </div>
                <p>Filtrar por:</p>
                <div class="filtro">
                    <label for="idade">Idade</label>
                    <input type="number" id="idade" name="idade" value="Idade"><br><br>
                    <label for="genero">Gênero</label>
                    <select id="genero" name="genero"><br>
                        <option value="terror">Terror</option>
                        <option value="ficcao_cientifica">Ficção científica</option>
                        <option value="aventura">Aventura</option>
                        <option value="comedia_romantica">Comédia romântica</option>
                    </select><br><br>
                    <label for="data_lancamento">Data de lançamento</label>
                    <input type="date" id="data_lancamento" name="data_lancamento" value="Data"><br><br>
                </div>
            </form>
        </div>
        <div class="centro">
            <div class="barra-superior">
                <div class="barra-pesquisa">
                    <div class="icone-pesquisa centralizar">
                        <ion-icon name="search"></ion-icon>
                    </div>
                    <div class="input-pesquisa centralizar"><input type="text" id="pesquisa_filme" name="pesquisa_filme" placeholder="Pesquisar filme"></div>
                </div>
                <div class="add-filme centralizar">
                    <input type="button" name="add-filme" value="Adicionar filme">
                </div>
            </div>
            <div class="filmes">
                <div class="linha">
                    <div class="quadro">
                        <div class="imagem"><?= $filme->caminhoimg ?></div>
                        <div class="info">
                            Título: <?= $filme->titulo ?><br>
                            Sinopse: <?= $filme->sinopse ?><br>
                            Data de estreia: <?= $filme->ano ?><br>
                            Gênero: <?= $filme->genero ?><br>
                            Elenco: <?= $filme->elenco ?><br>
                        </div>
                    </div>
                    <div class="quadro">
                        <div class="imagem"><?= $filme->caminhoimg ?></div>
                        <div class="info">
                            Título: <?= $filme->titulo ?><br>
                            Sinopse: <?= $filme->sinopse ?><br>
                            Data de estreia: <?= $filme->ano ?><br>
                            Gênero: <?= $filme->genero ?><br>
                            Elenco: <?= $filme->elenco ?><br>
                        </div>
                    </div>
                </div>
                <div class="linha">
                    <div class="quadro">
                        <div class="imagem"><?= $filme->caminhoimg ?></div>
                        <div class="info">
                            Título: <?= $filme->titulo ?><br>
                            Sinopse: <?= $filme->sinopse ?><br>
                            Data de estreia: <?= $filme->ano ?><br>
                            Gênero: <?= $filme->genero ?><br>
                            Elenco: <?= $filme->elenco ?><br>
                        </div>
                    </div>
                    <div class="quadro">
                        <div class="imagem"><?= $filme->caminhoimg ?></div>
                        <div class="info">
                            Título: <?= $filme->titulo ?><br>
                            Sinopse: <?= $filme->sinopse ?><br>
                            Data de estreia: <?= $filme->ano ?><br>
                            Gênero: <?= $filme->genero ?><br>
                            Elenco: <?= $filme->elenco ?><br>
                        </div>
                    </div>
                </div>
                <div class="linha">
                    <div class="quadro">
                        <div class="imagem"><?= $filme->caminhoimg ?></div>
                        <div class="info">
                            Título: <?= $filme->titulo ?><br>
                            Sinopse: <?= $filme->sinopse ?><br>
                            Data de estreia: <?= $filme->ano ?><br>
                            Gênero: <?= $filme->genero ?><br>
                            Elenco: <?= $filme->elenco ?><br>
                        </div>
                    </div>
                    <div class="quadro">
                        <div class="imagem"><?= $filme->caminhoimg ?></div>
                        <div class="info">
                            Título: <?= $filme->titulo ?><br>
                            Sinopse: <?= $filme->sinopse ?><br>
                            Data de estreia: <?= $filme->ano ?><br>
                            Gênero: <?= $filme->genero ?><br>
                            Elenco: <?= $filme->elenco ?><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="selecao">
            <div class="topo-selecao">
                FILME SELECIONADO
            </div>
            <div class="info-selecao">
                <div class="imagem"><?= $filme->caminhoimg ?></div>
                <div class="dados">
                    <div class="info">
                        Título: <?= $filme->titulo ?><br>
                        Sinopse: <?= $filme->sinopse ?><br>
                        Data de estreia: <?= $filme->ano ?><br>
                        Gênero: <?= $filme->genero ?><br>
                        Elenco: <?= $filme->elenco ?><br>
                    </div>
                </div>
                <div class="add-critica">
                    <div class="add centralizar">
                        <ion-icon name="add-outline"></ion-icon>
                    </div>
                    Adicionar Crítica
                </div>
            </div>
            <div class="social-selecao">
                <ion-icon name="share-social"></ion-icon>
                <ion-icon name="thumbs-up"></ion-icon>
                <ion-icon name="chatbox-outline"></ion-icon>
            </div>
        </div>
    </div>
</body>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"> </script>
<script nomodule src="https://unpkg .com/ionicons@5.5.2/dist/ionicons/ionicons.js"> </script>

</html>