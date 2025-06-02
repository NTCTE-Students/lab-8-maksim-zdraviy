<?php
trait Authenticatable {
    protected $isLoggedIn = false;

    public function login($username, $password) {
        if ($username === 'admin' && $password === '12345') {
            $this->isLoggedIn = true;
            echo "Пользователь $username успешно авторизован.<br>";
            return true;
        } else {
            echo "Ошибка: неверный логин или пароль.<br>";
            return false;
        }
    }

    public function logout() {
        $this->isLoggedIn = false;
        echo "Пользователь вышел из системы.<br>";
    }
}

class User {
    use Authenticatable;

    public function __construct(public $name) {}
}

$user = new User('Иван');
$user->login('admin', '12345');
$user->login('guest', '00000');
$user->logout();