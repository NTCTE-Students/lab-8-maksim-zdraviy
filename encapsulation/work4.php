<?php

class Counter {
    private $count;

    public function __construct($initialCount = 0) {
        $this->setCount($initialCount);
    }

    public function getCount() {
        echo "Текущее значение счётчика: ".$this->count;
    }

    public function setCount($newCount) {
        if ($newCount >= 0) {
            $this->count = $newCount;
            echo "Счётчик: ".$newCount."</br>";
        } else {
            echo "Счётчик не может быть отрицательным</br>";
        }
    }

    public function increment($amount = 1) {
        $newCount = $this->count + $amount;
        return $this->setCount($newCount);
    }

    public function decrement($amount = 1) {
        $newCount = $this->count - $amount;
        return $this->setCount($newCount);
    }
}

$counter = new Counter();
$counter->setCount(-2);
$counter->setCount(3);
$counter->increment();
$counter->decrement(4);
$counter->getCount();