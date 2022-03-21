<?php

require_once('models/Usuario.php');

class UsuarioDaoMysql implements UsuarioDAO {
    
    private $pdo;

    public function __construct(PDO $driver) {
        $this->pdo = $driver;
    }

    public function create(Usuario $usuario) {
        $sql = $this->pdo->prepare("INSERT INTO usuarios(nome,email) VALUES (:name, :email)");
        $sql->bindValue(':name', $usuario->getNome()); // associa o valor mandado
        $sql->bindParam(':email', $usuario->getEmail()); // associa o parametro(a propria variavel)
        /* afim de evitar problemas com ataques de sql injection nas querys é mais aconselhavel montar elas utilizando
        o prepare junto ao bindValue
        */
        $sql->execute();

        $usuario->setId($this->pdo->lastInsertId());
        return $usuario;
    }

    public function findAll() {
        $array = [];

        $sql = $this->pdo->query("SELECT * FROM usuarios");
        $sql = $sql->fetchAll();
        //é possivel retornar $sql e acessar no local como um array, mas vamos retornar aqui um array de objetos Usuario
        foreach($sql as $usuarioInfo) {
            $usuario = new Usuario();
            $usuario->setId($usuarioInfo['id']);
            $usuario->setNome($usuarioInfo['nome']);
            $usuario->setEmail($usuarioInfo['email']);
            $array[] = $usuario;
        }
        return $array;
    }

    public function findBy($field, $value) {
        $sql = $this->pdo->prepare("SELECT * FROM usuarios where $field = :email");
        $sql->bindValue(':email', $value);
        $sql->execute();
        return ($sql->rowCount() === 0);
    }

    /*public function findByEmail($email) {
        $sql = $this->pdo->prepare("SELECT * FROM usuarios where email = :email");
        $sql->bindValue(':email', $email);
        $sql->execute();
        return ($sql->rowCount() === 0);
    }*/

    public function getBy($field, $valor = -1) { // caso o id não seja passado pelo usuario, $valor = -1 que equivale a nenhum usuario
        $sql = $this->pdo->prepare("SELECT * FROM usuarios where $field = :valor");
        $sql->bindValue(':valor', $valor);
        $sql->execute();
        $sql = $sql->fetch(PDO::FETCH_ASSOC); // para fazer com que $sql passe a ter os objetos e não mais a query é nessecario utilizar do método fetch()/fetchAll(), com ou sem o PDO::FETCH_ASSOC
        if(!$sql) { // caso o $valor seja -1 ele entra
            return null;
        }
        $usuario = new Usuario();
        $usuario->setId($sql['id']);
        $usuario->setNome($sql['nome']);
        $usuario->setEmail($sql['email']);
        return $usuario;
    }

    public function update(Usuario $usuario) {
        $sql = $this->pdo->prepare("UPDATE usuarios SET nome = :nome, email = :email WHERE id = :id");
        $sql->bindValue('nome', $usuario->getNome());
        $sql->bindValue('email', $usuario->getEmail());
        $sql->bindValue('id', $usuario->getId());
        $sql->execute();
    }

    public function delete($field, $valor) {
        $sql = $this->pdo->prepare("DELETE FROM usuarios where $field = :valor");
        $sql->bindValue(':valor', $valor);
        $sql->execute();
    }
}