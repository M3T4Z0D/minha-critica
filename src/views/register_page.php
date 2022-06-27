<!-- Em desenvolvimento por Lucas Cabral -->

<?php
    use src\models\Usuario;
    use database\Database;
    
    if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['name'])){

        try {
            Database::createSchema();
            $user = new Usuario($_POST['email'], $_POST['senha'], $_POST['nome']);
            $user->salvar();
            header('Location: ../../index.php');
        } catch (\Throwable $th) {
            header('Location: ./register_page.php');
            echo "<script>alert('E-mail já cadastrado.')</script>";
        }
    }
    
?>

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
    <object width="100%"  height="100%" data="../../nav__menu.php"></object>
    </nav>

    <section id="form">
        <h1 class="form__title">Cadastro</h1>
        
        <hr>

        <form class="login__form" action="./register_page.php" method="POST">
            
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

            <input class="btn" type="submit" value="Casdastrar"/>
        </form>
    </section>
</body>

</html>