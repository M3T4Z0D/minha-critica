<!-- Em desenvolvimento por Lucas Cabral -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Crítica - Login</title>
    <link rel="stylesheet" href="../public/css/reset.css">
    <link rel="stylesheet" href="../public/css/navbar.css">
    <link rel="stylesheet" href="../public/css/register.css">
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
            <a href="login.html">Entrar</a>
        </div>
    </nav>

    <section id="form">
        <h1 class="form__title">Cadastro</h1>
        
        <hr>

        <form action="#" class="login__form">
            
            <div class="form__field">
                <label for="name">Nome completo</label>
                <input type="text" name="name" id="name">
            </div>

            <div class="form__field">
                <label for="email">E-mail</label>
                <input type="text" name="email" id="email">
            </div>

            <div class="form__field">
                <label for="password">Senha</label>
                <input type="password" name="password" id="password">
            </div>

            <button class="btn" type="submit">Cadastrar</button>
        </form>
    </section>
</body>

</html>