<?php

namespace src\models;

use src\database;

class Serie
{

    private $titulo;    //titulo do filme
    private $genero;    //genero
    private $ano;       //ano de lançamento string
    private $elenco;    //elenco
    private $sinopse;   //sinopse

    function __construct(string $titulo, string $genero, string $ano, string $sinopse, string $elenco)
    {
        $this->titulo = $titulo;
        $this->genero = $genero;
        $this->ano = $ano;
        $this->sinopse = $sinopse;
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

        $stm = $con->prepare('INSERT INTO Series (titulo, ano, genero, elenco, sinopse) VALUES (:titulo, :ano, :genero, :elenco, :sinopse)');
        $stm->bindValue(':titulo', $this->titulo);
        $stm->bindValue(':ano', $this->ano);
        $stm->bindValue(':genero', $this->genero);
        $stm->bindValue(':elenco', $this->elenco);
        $stm->bindValue(':sinopse', $this->sinopse);
        $stm->execute();
    }

    static public function buscarFilme($titulo): ?Serie
    {
        $con = Database::getConnection();
        $stm = $con->prepare('SELECT titulo, ano, genero, elenco, sinopse FROM Series WHERE titulo = :titulo');
        $stm->bindParam(':titulo', $titulo);

        $stm->execute();
        $resultado = $stm->fetch();

        if ($resultado) {
            $serie = new Serie($resultado['titulo'], $resultado['ano'], $resultado['genero'], $resultado['elenco'], $resultado['sinopse']);
            return $serie;
        } else {
            return NULL;
        }
    }

    // Função que retorna todos as series cadastradas.
    static public function buscarTodos(): array
    {
        $con = Database::getConnection();
        $stm = $con->prepare('SELECT titulo, ano, genero, elenco, sinopse FROM Series');
        $stm->execute();

        $resultados = [];

        while ($resultado = $stm->fetch()) {
            $serie = new Serie($resultado['titulo'], $resultado['ano'], $resultado['genero'], $resultado['elenco'], $resultado['sinopse']);
            array_push($resultados, $serie);
        }

        return $resultados;
    }
}
