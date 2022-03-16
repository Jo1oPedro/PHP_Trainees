<?php

class Post {
    private $likes = 0; // propriedade privada somente pode ser acessada dentro da classe(quem a referencia não e quem a herda não)
    protected $comments = []; // propriedade protected pode ser manipulada somente pela propria classe ou quem a herda
    public $author; // propriedade public pode ser manipulada por qualquer coisa

    public function aumentarLike() {
        $this->likes++;
    }

    public function getLike() {
        return $this->likes;
    }

    public function definirAutor(string $author ) : void {
        $this->author = $author;
    }
}

$post = new Post();

$post2 = new Post();

$likes = $post->getLike();

echo "Quantidade de likes inicial: " . $likes . "<br/> <br/>";

$post->aumentarLike();

$likes2 = $post->getLike();

echo "Quantidade de likes após a função aumentarLike(): " . $likes2 . "<br/> <br/>";

$post2->definirAutor('Cascata');

echo "Nome do autor do post2: " . $post2->author;