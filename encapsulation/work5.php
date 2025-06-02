<?php

class SessionManager {
    private $sessionStarted = false;

    public function __construct() {
        $this->startSession();
    }

    private function startSession() {
        if (!$this->sessionStarted) {
            session_start();
            $this->sessionStarted = true;
            echo "Сессия начата</br>";
        }
    }

    public function set($key, $value) {
        if (is_string($key)) {
            $_SESSION[$key] = $value;
            echo "Значение '{$key}' установлено в сессию</br>";
        } else {
            echo "Ключ должен быть строкой</br>";
        }
    }

    public function get($key) {
        if (isset($_SESSION[$key])) {
            echo "Получено значение '{$key}' из сессии: " . $_SESSION[$key] . "</br>";
            return $_SESSION[$key];
        } else {
            echo "Ключ '{$key}' не найден в сессии</br>";
            return null;
        }
    }

    public function remove($key) {
        if (isset($_SESSION[$key])) {
            unset($_SESSION[$key]);
            echo "Значение '{$key}' удалено из сессии</br>";
        } else {
            echo "Ключ '{$key}' не найден в сессии</br>";
        }
    }

    public function destroy() {
        session_destroy();
        $this->sessionStarted = false;
        echo "Сессия уничтожена</br>";
    }
}

$session = new SessionManager();
$session->set('user_id', 123);
$session->set('username', 'ivan');

$session->get('username');

$session->remove('username');
$session->get('username');

$session->destroy();