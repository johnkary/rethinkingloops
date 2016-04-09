<?php

/**
 * Example of array_map using a variadic array arguments.
 */
class User {
    private $name, $email, $job;

    public function __construct($name, $email, $job) {
        $this->name = $name;
        $this->email = $email;
        $this->job = $job;
    }
}

$names = ['John', 'Mary', 'Darren'];
$emails = ['john@kary.net', 'mary@mks.com', 'darren@woodworking.com'];
$jobs = ['Pilot', 'Astronaut', 'Woodworker'];

$createUser = function ($name, $email, $job) {
    return new User($name, $email, $job);
};
$users = array_map($createUser, $names, $emails, $jobs);

var_dump($users);
