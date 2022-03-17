<?php

class Post {
    public int $likes = 0;
    public array $comments = [];
    public string $author;

    public function __construct(int $qtd_likes = 0) { // o valor do parametro tá sendo definido como 0 padrão, caso não seja passado nada na criação do objeto
        $this->likes = $qtd_likes;
    }

    public function aumentarLike() {
        $this->likes++;
    }
}

$post1 = new Post(35);
$post2 = new Post();

$post2->aumentarLike();

echo "Quantidade de likes post1: " . $post1->likes . "<br/> <br/>";
echo "Quantidade de likes post2: " . $post2->likes . "<br/> <br/>";
