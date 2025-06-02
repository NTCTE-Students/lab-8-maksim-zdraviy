<?php

abstract class Order {
    abstract public function calculateTotal($price);
}

class OnlineOrder extends Order {
    public function calculateTotal($price) {
        $total=$price*0.1;
        echo "Итоговая сумма (онлайн заказ): {$total} руб.<br><br>";
    }
}

class OnlineOrder extends Order {
    public function calculateTotal($price) {
        $total=$price*0.1;
        echo "Итоговая сумма (онлайн заказ): {$total} руб.<br><br>";
    }
}

class OnlineOrder extends Order {
    public function calculateTotal($price) {
        $total=$price*0.1;
        echo "Итоговая сумма (онлайн заказ): {$total} руб.<br><br>";
    }
}


class StoreOrder extends Order {
    protected $taxRate = 0.2; // 20% налог для магазинных заказов

    public function calculateTotal() {
        echo "<h3>Заказ в магазине</h3>";
        $this->applyTax();
        echo "Итоговая сумма: {$this->total} руб.<br><br>";
        return $this->total;
    }
}

class TelephoneOrder extends Order {
    protected $discount = 0.05; // 5% скидка для телефонных заказов
    protected $taxRate = 0.1;   // 10% налог для телефонных заказов

    public function calculateTotal() {
        echo "<h3>Телефонный заказ</h3>";
        $this->applyDiscount();
        $this->applyTax();
        echo "Итоговая сумма: {$this->total} руб.<br><br>";
        return $this->total;
    }
}

// Тестирование системы заказов
$items = [
    'Товар 1' => 1500,
    'Товар 2' => 2300,
    'Товар 3' => 800
];

echo "<h2>Расчет стоимости заказов</h2>";

$orders = [
    new OnlineOrder($items),
    new StoreOrder($items),
    new TelephoneOrder($items)
];

foreach ($orders as $order) {
    $order->calculateTotal();
}