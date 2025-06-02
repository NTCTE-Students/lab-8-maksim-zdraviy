<?php
trait Timestampable {
    protected $createdAt;
    protected $updatedAt;

    public function setCreatedAt() {
        $this->createdAt = date('Y-m-d H:i:s');
    }

    public function setUpdatedAt() {
        $this->updatedAt = date('Y-m-d H:i:s');
    }

    public function getCreatedAt() {
        return $this->createdAt;
    }

    public function getUpdatedAt() {
        return $this->updatedAt;
    }
}

class Post {
    use Timestampable;

    public function createPost($title) {
        $this->setCreatedAt();
        $this->setUpdatedAt();
        echo "Пост '{$title}' создан. Дата: {$this->getCreatedAt()}<br>";
    }

    public function updatePost($title) {
        $this->setUpdatedAt();
        echo "Пост '{$title}' обновлен. Дата: {$this->getUpdatedAt()}<br>";
    }
}

class Comment {
    use Timestampable;

    public function createComment($text) {
        $this->setCreatedAt();
        $this->setUpdatedAt();
        echo "Комментарий '{$text}' создан. Дата: {$this->getCreatedAt()}<br>";
    }

    public function updateComment($text) {
        $this->setUpdatedAt();
        echo "Комментарий '{$text}' обновлен. Дата: {$this->getUpdatedAt()}<br>";
    }
}

$post = new Post();
$post->createPost("Новости");
$post->updatePost("Новости 3");

$comment = new Comment();
$comment->createComment("bla bla");
$comment->updateComment("bebebeb");