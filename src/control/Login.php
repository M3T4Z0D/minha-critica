<?php

namespace src\control;

use src\models\Usuario;
use PDOException;

class LoginController extends Controller
{

    /**
     * @var Usuario Variável que indica se um usuário está logado.
     */
    private $loggedUser;

    function __construct()
    {
        session_start();
        if (isset($_SESSION['user'])) $this->loggedUser = $_SESSION['user'];
    }

    public function loginIndex(): void
    {
        if (!$this->loggedUser) {
            $this->view('users/login');
        } else {
            header('Location: ' . BASEPATH . 'user/info');
        }
    }

    public function login(): void
    {
        $usuario = Usuario::buscarUsuario($_POST['email']);

        if ($usuario && $usuario->igual($_POST['email'], $_POST['senha'])) {
            $_SESSION['user'] = $this->loggedUser = $usuario;
            header('Location: /user/info');
        } else {
            header('Location: ' . BASEPATH . 'login?email=' . $_POST['email'] . '&mensagem=Usuário e/ou senha incorreta!');
        }
    }

    public function cadastrarIndex(): void
    {
        $this->view('users/cadastrar');
    }

    public function cadastrar(): void
    {
        try {
            $user = new Usuario($_POST['email'], $_POST['senha'], $_POST['nome']);
            $user->salvar();
            header('Location: ' . BASEPATH . 'login?email=' . $_POST['email'] . '&mensagem=Usuário cadastrado com sucesso!');
        } catch (\Throwable $th) {
            header('Location: ' . BASEPATH . 'register?email=' . $_POST['email'] . '&mensagem=Email já cadastrado!');
        }
    }

    public function info(): void
    {
        if (!$this->loggedUser) {
            header('Location: ' . BASEPATH . 'login?acao=entrar&mensagem=Você precisa se identificar primeiro');
            return;
        }
        $this->view('users/info', $this->loggedUser);
    }

    public function sair(): void
    {
        if (!$this->loggedUser) {
            header('Location: ' . BASEPATH . 'login?mensagem=Você precisa se identificar primeiro');
            return;
        }
        unset($_SESSION['user']);
        header('Location: ' . BASEPATH . 'login?mensagem=Usuário deslogado com sucesso!');
    }

    public function listar(): void
    {
        $usuarios = Usuario::buscarTodos();
        $usuarios = array_filter($usuarios, fn ($usuario) => $usuario->email != "suporte@login.com");
        $this->view('users/listar', $usuarios);
    }
}
