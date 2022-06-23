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
        <object width="100%"  height="100%" data="nav__menu.php"></object>
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