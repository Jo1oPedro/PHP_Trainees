<?php

// Dependency Inversion Principle (Princípio da inversão da dependência)

interface DBConnection {
    public function connect();
}

class MySQLConnection implements DBConnection {
    public function connect() {}
}

class OracleConnection implements DBConnection {
    public function connect() {}
}

class MongoConnection implements DBConnection {
    public function connect() {}
}

class UsuarioDAO {
    
    private $db;

    public function __construct(DBConnection $dbCon) { // varios tipos de injeção de dependencia em uma classe
        $this->db = $dbCon->connect();
    }

}

$dbCon = new MySQLConnection();
$dbCon2 = new OracleConnection();
$dbCon3 = new OracleConnection();

$usuarioDao = new UsuarioDAO($dbCon);
$usuarioDao2 = new UsuarioDao($dbCon2);
$usuarioDao3 = new UsuarioDao($dbCon3);