<?php

class BankAccount {
    private $accountNumber;
    private $balance;

    public function __construct($accountNumber, $balance = 0) {
        $this -> accountNumber = $accountNumber;
        $this -> balance = $balance;
    }

    public function deposit($amount) {
        if($amount > 0) {
            $this -> balance += $amount;
        }
    }

    public function withdraw($amount) {
        if($amount > 0 && $amount <= $this->balance) {
            $this -> balance -= $amount;
        }
    }

    public function getBalance() {
        return $this -> balance;
    }
}

$account = new BankAccount("000000001");
echo "Текущий баланс: " . $account->getBalance() . "<br>";

$account->deposit(500);
echo "Текущий баланс: " . $account->getBalance() . "<br>";

$account->withdraw(200);
echo "Текущий баланс: " . $account->getBalance() . "<br>";