<?php

namespace src\control;

abstract class Controller
{
    /**
     * Este método é chama uma view
     * @param  string  $view   A view que será chamada
     * @param  array   $data   dados da view
     */
    public function view(string $view, $data = []): void{
        require  __DIR__ . '/../vision/' . $view . '.php';
    }
}
