<?php

class User {
    private $name, $age;

    public function fromArray(array $data)
    {
        $u = new User;
        $u->name = $data['name'];
        $u->age = $data['age'];
        return $u;
    }
}

$data = [
    ['name' => 'Sarah', 'age' => 58],
    ['name' => 'Matt', 'age' => 52],
    ['name' => 'Mickey', 'age' => 42],
];

$users = array_map('User::fromArray', $data);
$users = array_map(['User', 'fromArray'], $data);

$user = new User();
$users = array_map([$user, 'fromArray'], $data);
