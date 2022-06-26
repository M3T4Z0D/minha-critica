<?php

namespace src\models;

use src\database;

class Critica
{
    private $usuario;    //usuario que fez a critica
    private $comentario; //critica em si
    private $media;      //filme, serie ou livro comentado
    private $nota;


    function __construct(string $usuario, string $comentario, string $media, string $nota)
    {
        $this->usuario = $usuario;
        $this->comentario = $comentario;
        $this->media = $media;
        $this->nota = $nota;
    }

    public function __get($campo)
    {
        return $this->$campo;
    }

    public function __set($campo, $valor)
    {
        return $this->$campo = $valor;
    }

    public function salvar(): void
    {
        $con = Database::getConnection();

        $stm = $con->prepare('INSERT INTO Critica (usuario,comentario, media, nota) VALUES (:usuario, :cometario, :media, :nota)');
        $stm->bindValue(':usuairo', $this->usuario);
        $stm->bindValue(':comentario', $this->comentario);
        $stm->bindValue(':media', $this->media);
        $stm->bindValue(':nota', $this->nota);
        $stm->execute();
    }

    static public function buscarCritica($usuario): ?Filme
    {
        $con = Database::getConnection();
        $stm = $con->prepare('SELECT usuario,comentario, media, nota FROM Critica WHERE usuario = :usuario');
        $stm->bindParam(':usuario', $usuario);

        $stm->execute();
        $resultado = $stm->fetch();

        if ($resultado) {
            $critica = new Critica($resultado['usuario'], $resultado['comentario'], $resultado['media'], $resultado['ano']);
            return $critica;
        } else {
            return NULL;
        }
    }

    // Função que retorna todos os filmes cadastrados.
    static public function buscarTodos(): array
    {
        $con = Database::getConnection();
        $stm = $con->prepare('SELECT caminhoimg, titulo, ano, genero, elenco, duracao, sinopse FROM Filmes');
        $stm->execute();

        $resultados = [];

        while ($resultado = $stm->fetch()) {
            $critica = new Critica($resultado['usuario'], $resultado['comentario'], $resultado['media'], $resultado['ano']);
            array_push($resultados, $critica);
        }

        return $resultados;
    }
}
