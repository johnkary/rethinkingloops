<?php

class Adult {
    private $age;
    public function __construct($age) {
        $this->age = $age;
    }
    public function getAge() {
        return $this->age;
    }
}

class UnitedStatesLaws {
    public static function canBuyAlcohol(Adult $a) {
        return $a->getAge() >= 21;
    }
}

$adults = [
    new Adult(31),
    new Adult(12),
    new Adult(8),
];
$legal = array_filter($adults, 'UnitedStatesLaws::canBuyAlcohol');
var_dump($legal);