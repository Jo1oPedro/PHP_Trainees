<?php

// S — Single Responsiblity Principle (Princípio da responsabilidade única)

// Versão errada(mais de uma responsabilidade)
class Usuario { // class Deus, alto acoplamento, dificuldade de compreensão do objetivo da classe


    // 1° responsabilidade: gerenciador do usuario
    public function setNome() {}
    public function getNome() {}
    // email, senha ...

    // 2° responsabilidade: processo de manipulação do usuario no banco de dados
    public function add() {}
    public function update() {}
    public function delete() {}

}

///////////////////////////////////////////////////////////

// Versão correta(apenas uma responsabilidade)
class Usuario {

    public function setNome() {}
    public function getNome() {}
    // email, senha ...

}

class UsuarioDb {
 
    public function create(Usuario $u) {}
    public function update(Usuario $u) {}
    public function delete($id) {}

}