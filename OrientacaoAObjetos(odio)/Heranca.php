<?php

class Post {
    private int $id;
    private int $likes = 0;

    public function setId($id) {
        $this->id = $id;
    }

    protected function getId() {
        return $this->id;
    }

    public function setLikes(int $likes) {
        $this->likes = $likes;
    }

    public function getLikes() {
        return $this->likes;
    }
}

class Site extends Post {
    private $url;

    public function __construct($id) {
        $this->setId($id);
    }

    public function setUrl($url) {
        $this->url = $url;
    }

    public function getUrl() {
        return $this->url;
    }

    public function getId2() { // já existe uma função com o nome getId
        return $this->getId();
    }
}

$site = new Site(516);
$site->setUrl('www');
$site->setLikes(10);

echo "Url do site: " . $site->getUrl() . "<br/> <br/>";
echo "Numero de likes: " . $site->getLikes() . "<br/> <br/>";
echo "Id do site: " . $site->getId2() . "<br/> <br/>";
echo "Id do site: " . $site->getId() . "<br/> <br/>"; // getId diferente de getId2 é uma função protected, logo pode ser utilizada apenas classe mãe e seus filhos
