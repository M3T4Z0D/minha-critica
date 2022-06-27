<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Crítica</title>
    <link rel="stylesheet" href="src/public/css/navbar.css">
    <link href="src/public/css/home.css" rel="stylesheet">
</head>

<body>
    <nav>
        <object width="100%" height="100%" data="../../nav__menu.php"></object>
    </nav>
    <div class="corpo">
        <div class="movies">
            <div class="movies-quad">
                <a href="src\views\movie_search_page.php" target="_parent" class="menu__item">
                    <div class="img">
                        <img src=<?= $filmes->caminhoimg ?> />
                    </div>
                    <div class="txt">
                        <div class="titulo">Título: <?= $filmes->titulo ?></div>
                        <div class="ano">Ano: <?= $filmes->ano ?></div>
                        <div class="duracao">Duração: <?= $filmes->duracao ?></div>
                        <div class="gênero">Gênero: <?= $filmes->genero ?></div>
                        <div class="elenco">Elenco: <?= $filmes->elenco ?></div>
                    </div>
                </a>
            </div>
            <div class="movies-quad">
                <a href="src\views\movie_search_page.php" target="_parent" class="menu__item">
                    <div class="img">
                        <img src=<? $filmes->caminhoimg ?> />
                    </div>
                    <div class="txt">
                        <div class="titulo">Título: <?= $filmes->titulo ?></div>
                        <div class="ano">Ano: <?= $filmes->ano ?></div>
                        <div class="duracao">Duração: <?= $filmes->duracao ?></div>
                        <div class="gênero">Gênero: <?= $filmes->genero ?></div>
                        <div class="elenco">Elenco: <?= $filmes->elenco ?></div>
                    </div>
                </a>
            </div>
            <div class="movies-quad">
                <a href="src\views\movies_search_page.php" target="_parent" class="menu__item">
                    <div class="img">
                        <img src=<? $filmes->caminhoimg ?> />
                    </div>
                    <div class="txt">
                        <div class="titulo">Título: <?= $filmes->titulo ?></div>
                        <div class="ano">Ano: <?= $filmes->ano ?></div>
                        <div class="duracao">Duração: <?= $filmes->duracao ?></div>
                        <div class="gênero">Gênero: <?= $filmes->genero ?></div>
                        <div class="elenco">Elenco: <?= $filmes->elenco ?></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="series">
            <div class="series-quad">
                <a href="src\views\series_search_page.php" target="_parent" class="menu__item">
                    <div class="img">
                        <img src=<? $serie->caminhoimg ?> />
                    </div>
                    <div class="txt">
                        <div class="titulo">Título: <?= $serie->titulo ?></div>
                        <div class="ano">Ano: <?= $serie->ano ?></div>
                        <div class="gênero">Gênero: <?= $serie->genero ?></div>
                        <div class="elenco">Elenco: <?= $serie->elenco ?></div>
                        <div class="avaliacao">Avaliação: <?= $serie->avaliacao ?></div>
                    </div>
                </a>
            </div>
            <div class="series-quad">
                <a href="src\views\series_search_page.php" target="_parent" class="menu__item">
                    <div class="img">
                        <img src=<? $serie->caminhoimg ?> />
                    </div>
                    <div class="txt">
                        <div class="titulo">Título: <?= $serie->titulo ?></div>
                        <div class="ano">Ano: <?= $serie->ano ?></div>
                        <div class="gênero">Gênero: <?= $serie->genero ?></div>
                        <div class="elenco">Elenco: <?= $serie->elenco ?></div>
                        <div class="avaliacao">Avaliação: <?= $serie->avaliacao ?></div>
                    </div>
                </a>
            </div>
            <div class="series-quad">
                <a href="src\views\series_search_page.php" target="_parent" class="menu__item">
                    <div class="img">
                        <img src=<? $serie->caminhoimg ?> />
                    </div>
                    <div class="txt">
                        <div class="titulo">Título: <?= $serie->titulo ?></div>
                        <div class="ano">Ano: <?= $serie->ano ?></div>
                        <div class="gênero">Gênero: <?= $serie->genero ?></div>
                        <div class="elenco">Elenco: <?= $serie->elenco ?></div>
                        <div class="avaliacao">Avaliação: <?= $serie->avaliacao ?></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="books">
            <div class="books-quad">
                <a href="src\views\books_search_page.php" target="_parent" class="menu__item">
                    <div class="img">
                        <img src=<? $livro->caminhoimg ?> />
                    </div>
                    <div class="txt">
                        <div class="titulo">Título: <?= $livro->titulo ?></div>
                        <div class="ano">Ano: <?= $livro->ano ?></div>
                        <div class="gênero">Gênero: <?= $livro->genero ?></div>
                        <div class="editora"> Editora: <?= $livro->editora ?></div>
                        <div class="autor">Autor: <?= $livro->autor ?></div>
                        <div class="avaliacao">Avaliação: <?= $livro->avaliacao ?></div>
                    </div>
                </a>
            </div>
            <div class="books-quad">
                <a href="src\views\books_search_page.php" target="_parent" class="menu__item">
                    <div class="img">
                        <img src=<? $livro->caminhoimg ?> />
                    </div>
                    <div class="txt">
                        <div class="titulo">Título: <?= $livro->titulo ?></div>
                        <div class="ano">Ano: <?= $livro->ano ?></div>
                        <div class="gênero">Gênero: <?= $livro->genero ?></div>
                        <div class="editora"> Editora: <?= $livro->editora ?></div>
                        <div class="autor">Autor: <?= $livro->autor ?></div>
                        <div class="avaliacao">Avaliação: <?= $livro->avaliacao ?></div>
                    </div>
                </a>
            </div>
            <div class="books-quad">
                <a href="src\views\books_search_page.php" target="_parent" class="menu__item">
                    <div class="img">
                        <img src=<? $livro->caminhoimg ?> />
                    </div>
                    <div class="txt">
                        <div class="titulo">Título: <?= $livro->titulo ?></div>
                        <div class="ano">Ano: <?= $livro->ano ?></div>
                        <div class="gênero">Gênero: <?= $livro->genero ?></div>
                        <div class="editora"> Editora: <?= $livro->editora ?></div>
                        <div class="autor">Autor: <?= $livro->autor ?></div>
                        <div class="avaliacao">Avaliação: <?= $livro->avaliacao ?></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</body>

</html>