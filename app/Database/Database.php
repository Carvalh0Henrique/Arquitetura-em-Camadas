<?php
//Gera conexão com o banco de dados

namespace App\Database;

use PDO;
use PDOException;

class Database{ 
    private static ?PDO $connection = null;

    public static function connect() : PDO {
        if (self::$connection===null) {
            try{
                self::$connection = new PDO(
                    'mysql:host=localhost; dbname=login_app; charset=utf8mb4',
                    'root', 
                    ''
                );
                self::$connection -> setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
            }catch(PDOException $e) {
                die('Erro de conexão ' . $e->getMessage());
            }
        }

        return self::$connection;
    }
}