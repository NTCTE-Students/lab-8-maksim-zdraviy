<?php
trait Logger {
    public function log($message) {
        print("Лог: {$message}<br>");
    }
}

class User {
    use Logger;

    public function createUser($name) {
        $this->log("Пользователь {$name} создан.");
    }
}

class Order {
    use Logger;

    public function createOrder($id) {
        $this->log("Создан заказ #{$id}");
    }
}

class Product {
    use Logger;

    public function createProduct($name) {
        $this->log("Создан товар: {$name}");
    }
}

$user = new User();
$user->createUser("Алексей");

$order = new Order();
$order->createOrder(1001);

$product = new Product();
$product->createProduct("Телефон");