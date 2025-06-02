<?php

abstract class Payment {
    abstract public function process($amount);
}

class CreditCardPayment extends Payment {
    public function process($amount) {
        echo "Обработка платежа через кредитную карту на сумму {$amount} руб.<br>";
    }
}

class PayPalPayment extends Payment {
    public function process($amount) {
        echo "Обработка платежа через PayPal на сумму {$amount} руб.<br>";
    }
}

class BankTransferPayment extends Payment {
    public function process($amount) {
        echo "Обработка банковского перевода на сумму {$amount} руб.<br>";
    }
}

$creditCard = new CreditCardPayment();
$PayPal = new PayPalPayment();
$bankTransfer = new BankTransferPayment();

$creditCard->process(1000);
$PayPal->process(150);
$bankTransfer->process(100000);