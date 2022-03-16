<?php

class Post {
    public $likes = 0; // propriedade
    public $comments = [];
    public $author;
}

$post = new Post();

$post->likes = 3;

$post2 = new Post();

$post2->likes = 14;

echo "Post 1 tem " . $post->likes . " likes <br/> <br/>";

echo "Post 2 tem " . $post2->likes . " likes <br/> <br/>";
