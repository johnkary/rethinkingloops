<?php

class Student {
    private $name, $state, $age;

    public function __construct($name, $state, $age) {
        $this->name = $name;
        $this->state = $state;
        $this->age = $age;
    }

    public function getName()  { return $this->name; }
    public function getState() { return $this->state; }
    public function getAge()   { return $this->age; }
}
