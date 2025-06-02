<?php

abstract class Order {
    abstract public function calculateTotal($price);
}

class OnlineOrder extends Order {
    public function calculateTotal($price) {
        $discount=$price*0.1;
        $price-=$discount;
        echo "Итоговая сумма (онлайн заказ: скидка 10%): {$price} руб.<br><br>";
    }
}

class StoreOrder extends Order {
    public function calculateTotal($price) {
        $taxRate=$price*0.2;
        $price+=$taxRate;
        echo "Итоговая сумма (покупка в магазине: налог 20%): {$price} руб.<br><br>";
    }
}

class TelephoneOrder extends Order {
    public function calculateTotal($price) {
        $taxRate=$price*0.1;
        $discount=$price*0.05;
        $price+=$taxRate;
        $price-=$discount;
        echo "Итоговая сумма (покупка по телефоны: налог 10%, скидка 5%): {$price} руб.<br><br>";
    }
}

$price = 1000;

$online = new OnlineOrder();
$online->calculateTotal($price);

$store = new StoreOrder();
$store->calculateTotal($price);

$telephone = new TelephoneOrder();
$telephone->calculateTotal($price);