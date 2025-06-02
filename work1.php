<?php

interface Notifier {
    public function send($message);
}

class EmailNotifier implements Notifier {
    public function send($message) {
        print("Отправка email: {$message}<br>");
    }
}

class SMSNotifier implements Notifier {
    public function send($message) {
        print("Отправка SMS: {$message}<br>");
    }
}

class PushNotifier implements Notifier {
    public function send($message) {
        print("Отправка push: {$message}<br>");
    }
}

$emailNotifier = new EmailNotifier();
$smsNotifier = new SMSNotifier();
$pushNotifier = new PushNotifier();

$testMessage = "Ваш заказ готов к выдаче";
$emailNotifier->send($testMessage);
$smsNotifier->send($testMessage);
$pushNotifier->send($testMessage);