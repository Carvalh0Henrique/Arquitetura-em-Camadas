<?php
namespace App\Controller;

//rotas
use App\Service\AuthService;

class AuthController {
    private AuthService $service;

    public function __construct() {
        $this->service = new AuthService();
    }
}