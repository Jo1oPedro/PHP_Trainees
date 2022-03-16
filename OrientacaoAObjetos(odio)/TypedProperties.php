<?php

//php 7.4 pra cima

class Post {
    public $likes = 0;
    public int $likes2 = 0;
    public array $comments = [];
    public $author;

    public function aumentarLike() {
        $this->likes++;
    }
}

$post = new Post();
$post->likes = 'Cascata';
echo "Quantidade de likes do post: " . $post->likes . "<br/> <br/>";

//$post->likes2 = 'Cascata';
//echo "Quantidade de likes do post: " . $post->likes2 . "<br/> <br/>"; // como a propriedade $likes2 está tipada como int, 
                                                                      // o valor passado para ela deve ser obrigatoriamente int

$post->comments = explode(' ', 'Cascata'); // caso a funcao explode não seja utilizada a string 'Cascata' não sera aceita, por não se tratar de um array, mas sim uma string
echo "Comentarios do post: ";
print_r($post->comments);
echo "<br/> <br/>";

