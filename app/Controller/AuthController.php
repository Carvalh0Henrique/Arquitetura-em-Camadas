<?php
namespace App\Controller;

//rotas
use App\Service\AuthService;

class AuthController {
    private AuthService $service;

    public function __construct() {
        $this->service = new AuthService();
    }

    public function handLogin(): void {
        $email = $_POST['email'] ?? ''; //condicional: "se email = Post faça ''"
        $password = $_POST['password'] ?? '';

        if (empty($email) || empty($password)) {
            echo "E-mail e senha são obrigatórios.";
            return;
        }

        $isAutenticated = $this -> service -> login($email, $password);

        if ($isAutenticated) {
            echo "Login bem-sucedido";
        } else {
            echo "Credenciais inválidas";
        }
    }
}