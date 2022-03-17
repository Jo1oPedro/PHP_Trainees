<?php

interface Database { // interface basicamente serve como um guia nas classes onde ela é implementada
    public function listarProdutos();
    public function adicionarProduto();
    public function alterarProduto();
}
class MysqlDB implements Database{

    public function listarProdutos() {

    }

    public function adicionarProduto() {
        echo "Adicionando com MYsql";
    }

    public function alterarProduto() {

    }

}

class OracleDB implements Database{
    
    public function listarProdutos() {

    }

    public function adicionarProduto() {
        echo "Adicionando com Oracle";
    }

    public function alterarProduto() {

    }
}

class MongoDB implements Database {

    public function listarProdutos() {

    }

    public function adicionarProduto() {

    }
}

$db = new MongoDB();
$db->listarProdutos();