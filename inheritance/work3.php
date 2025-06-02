<?php

class Material {
    public $title;
    public $author;

    public function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
    }

    public function getInfo() {
        return "{$this->title} от {$this->author}";
    }
}

class Book extends Material {
    public $pages;

    public function __construct($title, $author, $pages) {
        parent::__construct($title, $author);
        $this->pages = $pages;
    }
}

class Article extends Material {
    public $journal;

    public function __construct($title, $author, $journal) {
        parent::__construct($title, $author);
        $this->journal = $journal;
    }
}

class Video extends Material {
    public $duration;

    public function __construct($title, $author, $duration) {
        parent::__construct($title, $author);
        $this->duration = $duration;
    }
}

$book = new Book("Harry Potter", "J.K. Rowling", 1178);
echo $book->getInfo() . ", Страницы: " . $book->pages . "<br>";

$article = new Article("IT News 02/05/2025", "Sibao Kolin", "Mursilka");
echo $article->getInfo() . ", Журнал: " . $article->journal . "<br>";

$video = new Video("Как стать миллионером", "Ярик Снежный", 30);
echo $video->getInfo() . ", Продолжительность: " . $video->duration . "<br>";