<?php

class User {
    private $username;
    private $passwordHash;

    public function __construct($username) {
        $this->username = $username;
    }

    public function setPassword($password) {
        if (strlen($password) >= 8) {
            $this->passwordHash = password_hash($password, PASSWORD_DEFAULT);
            return true;
        }
        return false;
    }

    public function checkPassword($password) {
        return password_verify($password, $this->passwordHash);
    }

    public function getUsername() {
        return $this->username;
    }
}

$user = new User("admin");

if ($user->setPassword("Abcd1234")) {
    echo "Пароль успешно установлен для пользователя " . $user->getUsername() . "<br>";
} else {
    echo "Пароль слишком короткий (минимум 8 символов)<br>";
}

if ($user->checkPassword("Abcd1234")) {
    echo "Пароль верный<br>";
} else {
    echo "Неверный пароль<br>";
}

if ($user->checkPassword("wrongPass")) {
    echo "Пароль верный<br>";
} else {
    echo "Неверный пароль<br>";
}