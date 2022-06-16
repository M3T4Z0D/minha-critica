<?php

namespace src\models;

use database\Database;


class Filme
{
    private $titulo;    //titulo do filme
    private $genero;    //genero
    private $ano;       //ano de lançamento string
    private $elenco;    //elenco
    private $duracao;   //duracao string
    private $sinopse;   //sinopse

    function __construct(string $titulo, string $genero, string $ano, string $sinopse, string $duracao, string $elenco)
    {
        $this->titulo = $titulo;
        $this->genero = $genero;
        $this->ano = $ano;
        $this->sinopse = $sinopse;
        $this->duracao = $duracao;
        $this->elenco = $elenco;
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

        $stm = $con->prepare('INSERT INTO Filmes (titulo, ano, genero, elenco, duracao, sinopse) VALUES (:titulo, :ano, :genero, :elenco, :duracao, :sinopse)');
        $stm->bindValue(':titulo', $this->titulo);
        $stm->bindValue(':ano', $this->ano);
        $stm->bindValue(':genero', $this->genero);
        $stm->bindValue(':elenco', $this->elenco);
        $stm->bindValue(':duracao', $this->duracao);
        $stm->bindValue(':sinopse', $this->sinopse);
        $stm->execute();
    }

    static public function buscarFilme($titulo): ?Filme
    {
        $con = Database::getConnection();
        $stm = $con->prepare('SELECT titulo, ano, genero, elenco, duracao, sinopse FROM Filmes WHERE titulo = :titulo');
        $stm->bindParam(':titulo', $titulo);

        $stm->execute();
        $resultado = $stm->fetch();

        if ($resultado) {
            $filme = new Filme($resultado['titulo'], $resultado['ano'], $resultado['genero'], $resultado['elenco'], $resultado['duracao'], $resultado['sinopse']);
            return $filme;
        } else {
            return NULL;
        }
    }

    // Função que retorna todos os filmes cadastrados.
    static public function buscarTodos(): array
    {
        $con = Database::getConnection();
        $stm = $con->prepare('SELECT titulo, ano, genero, elenco, duracao, sinopse FROM Filmes');
        $stm->execute();

        $resultados = [];

        while ($resultado = $stm->fetch()) {
            $filme = new Filme($resultado['titulo'], $resultado['ano'], $resultado['genero'], $resultado['elenco'], $resultado['duracao'], $resultado['sinopse']);
            array_push($resultados, $filme);
        }
        return $resultados;
    }
}
