<?php

class Usuario {
    private $id;
    private $nome;
    private $email;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = trim($id);
    }

    public function getNome(): string{
        return $this->nome;
    }

    public function setNome(string $nome){
        $this->nome = ucwords(trim($nome));
        //ucwords == cada 1° letra do nome em maiusculo
    }

    public function getEmail(): string{
        return $this->email;
    }

    public function setEmail(string $email) {
        $this->email = strtolower(trim($email));
    }
}

interface UsuarioDAO { // criando um padrão(não é obrigatorio, mas ajuda)
    public function create(Usuario $usuario);
    //public function findByEmail($email);
    public function findBy($field, $value);
    public function findAll();
    public function getBy($field, $valor);
    public function update(Usuario $usuario);
    public function delete($field, $valor);
}