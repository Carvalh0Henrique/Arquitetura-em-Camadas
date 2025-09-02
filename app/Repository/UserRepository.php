<?php
//Responsável por fazer a conexão e busca (banco de dados)

namespace App\Repository;

//Cada classe que devo utilizar dentro do Repository
use App\Database\Database;
use App\Model\user;
use PDO;

class UserRepository {
    private PDO $db;

    public function __construct(){        
        $this->db = Database::connect();
    }

    public function findByEmail(string $email): ?User {
        $stmt = $this->db->prepare("SELECT * FROM  users WHERE email = :email"); //faz a busca no banco
        $stmt->execute(['email' => $email]); //evita a injeção SQL

        $data = $stmt->fetch(); //Busca dentro da linha
        if(!$data){
            return null;
        }

        return new User($data['id'], $data['email'], $data['password']);
    }
}