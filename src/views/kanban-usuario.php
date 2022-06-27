<?php
  use src\database;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kanban Minha Critica</title>
    <link rel="stylesheet" href="../public/css/navbar.css">
    <link rel="stylesheet" href="../public/css/kanban.css">
</head>
<body>
    <nav>
        <object width="100%"  height="100%" data="../../nav__menu.php"></object>
    </nav>
    <br>
    <div class="texto-destaque">SEU KANBAN DE CRÍTICAS</div>
    <div class="table-kanban-filmes">
    <ul style="list-style: none;">
      <li class="table-critica-destaque">
          <img class="img" src="../public/img/interstellar.png">
          <div class="titulo-critica-destaque"><strong>Interestelar</strong></div>
          <div class="texto-descritivo">Data da publicação: dd/mm/aaaa <br>
            <strong>Descrição:</strong> Este é um teste de descrição que o usuario podera
            fazer acerca do filme escolhido.</div>
            </li>
       <?php
       $con = Database::getConnection();
       $stm = $con->prepare('SELECT caminhoimg, titulo, ano, sinopse FROM Filmes');
       $stm->execute();

       while ($resultado = $stm->fetch()) { ?>
       <li class="table-critica-destaque">
         <img class="img" src="<?=$resultado['caminhoimg'];?>">
         <div class="titulo-critica-destaque"><?=$resultado['titulo'];?></div>
         <div class="texto-descritivo">Ano: <?=$resultado['ano'];?><br>
         <strong>Descrição: </strong><?=$resultado['sinopse'];?></div>
       </li>
    <?php } ?>
    </ul>
    </div>
    <div class="table-kanban-series">
        <ul style="list-style: none;">
        <?php
       $con = Database::getConnection();
       $stm = $con->prepare('SELECT caminhoimg, titulo, ano, sinopse FROM Series');
       $stm->execute();

       while ($resultado = $stm->fetch()) { ?>
       <li class="table-critica-destaque">
         <img class="img" src="<?=$resultado['caminhoimg'];?>">
         <div class="titulo-critica-destaque"><?=$resultado['titulo'];?></div>
         <div class="texto-descritivo">Ano: <?=$resultado['ano'];?><br>
         <strong>Descrição: </strong><?=$resultado['sinopse'];?></div>
       </li>
    <?php } ?>
    </ul>
  <div class="table-kanban-livros">
    <ul style="list-style: none;">
    <?php
       $con = Database::getConnection();
       $stm = $con->prepare('SELECT caminhoimg, titulo, ano, sinopse FROM Livros');
       $stm->execute();

       while ($resultado = $stm->fetch()) { ?>
       <li class="table-critica-destaque">
         <img class="img" src="<?=$resultado['caminhoimg'];?>">
         <div class="titulo-critica-destaque"><?=$resultado['titulo'];?></div>
         <div class="texto-descritivo">Ano: <?=$resultado['ano'];?><br>
         <strong>Descrição: </strong><?=$resultado['sinopse'];?></div>
       </li>
    <?php } ?>
    </ul>
  </div>
</body>
</html>
