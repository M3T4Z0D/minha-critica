<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Crítica</title>
    <link rel="stylesheet" href="../public/css/navbar.css">
    <link href="../public/css/movie_review_filter.css" rel="stylesheet">
</head>

<body>
    <nav>
        <object width="100%" height="100%" data="../../nav__menu.php"></object>
    </nav>

    <div class="corpo">
        <div class="filtro">
            <div class="titulo">
                <h1>Filtros</h1>
            </div>
            <form>
                <label for="tipo">Tipo</label>
                <select id="tipo" name="tipo"><br>
                    <option value="filme">Filme</option>
                    <option value="livro">Livro</option>
                    <option value="serie">Serie</option>
                </select><br><br>
                <div class="linha"></div><br><br>
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" placeholder="Nome da obra"><br><br>
                <div class="linha"></div><br><br>
                <label for="ano_lanc">Ano de Lançamento</label>
                <input type="text" id="ano_lanc" name="ano_lanc" placeholder="Ano de lançamento"><br><br>
                <div class="linha"></div><br><br>
                <label for="usuario">Usuário</label>
                <input type="text" id="usuario" name="usuario" placeholder="Usuário"><br><br>
                <div class="linha"></div><br><br>
                <input type="submit" value="Filtrar">
            </form>
        </div>
        <div class="quadros">
            <div class="quadro centralizar">
                <div class="obra centralizar"></div>
                <div class="barra centralizar">
                    <div class="favorito">
                        <ion-icon name="heart"></ion-icon>
                    </div>
                    <div class="compartilhar_abrir">
                        <ion-icon name="share-social"></ion-icon>
                        <ion-icon name="open-outline"></ion-icon>
                    </div>
                    <div class=""></div>
                </div>
            </div>
            <div class="quadro centralizar">
                <div class="obra centralizar"></div>
                <div class="barra centralizar">
                    <div class="favorito">
                        <ion-icon name="heart"></ion-icon>
                    </div>
                    <div class="compartilhar_abrir">
                        <ion-icon name="share-social"></ion-icon>
                        <ion-icon name="open-outline"></ion-icon>
                    </div>
                    <div class=""></div>
                </div>
            </div>
            <div class="quadro centralizar">
                <div class="obra centralizar"></div>
                <div class="barra centralizar">
                    <div class="favorito">
                        <ion-icon name="heart"></ion-icon>
                    </div>
                    <div class="compartilhar_abrir">
                        <ion-icon name="share-social"></ion-icon>
                        <ion-icon name="open-outline"></ion-icon>
                    </div>
                    <div class=""></div>
                </div>
            </div>
            <div class="quadro centralizar">
                <div class="obra centralizar"></div>
                <div class="barra centralizar">
                    <div class="favorito">
                        <ion-icon name="heart"></ion-icon>
                    </div>
                    <div class="compartilhar_abrir">
                        <ion-icon name="share-social"></ion-icon>
                        <ion-icon name="open-outline"></ion-icon>
                    </div>
                    <div class=""></div>
                </div>
            </div>
            <div class="quadro centralizar">
                <div class="obra centralizar"></div>
                <div class="barra centralizar">
                    <div class="favorito">
                        <ion-icon name="heart"></ion-icon>
                    </div>
                    <div class="compartilhar_abrir">
                        <ion-icon name="share-social"></ion-icon>
                        <ion-icon name="open-outline"></ion-icon>
                    </div>
                    <div class=""></div>
                </div>
            </div>
            <div class="quadro centralizar">
                <div class="obra centralizar"></div>
                <div class="barra centralizar">
                    <div class="favorito">
                        <ion-icon name="heart"></ion-icon>
                    </div>
                    <div class="compartilhar_abrir">
                        <ion-icon name="share-social"></ion-icon>
                        <ion-icon name="open-outline"></ion-icon>
                    </div>
                    <div class=""></div>
                </div>
            </div>
        </div>
    </div>
</body>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"> </script>
<script nomodule src="https://unpkg .com/ionicons@5.5.2/dist/ionicons/ionicons.js"> </script>

</html>