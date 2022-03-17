<?php

class Post {
    public int $id;
    private $likes = 0;
    public array $comments = [];
    private string $author;

    public function aumentarLike() {
        $this->likes++;
    }

    public function setAuthor(string $author = null) {
        $this->author = ucfirst($author);
    }

    public function getAuthor() : string {
        return $this->author ?? 'Sem autor';
    }
}

$post = new Post();
$post->setAuthor('cascata');
$post2 = new Post();

echo "Autor do post: " . $post->getAuthor() . "<br/> <br/>";
echo "Autor do post 2: " . $post2->getAuthor() . "<br/> <br/>";

echo "Autor do post: " . $post->author . "<br/> <br/>";