<?php

/**
 * Example of array_map using a variadic array arguments.
 */
class Contact {
  private $name, $email, $job;

  function __construct($name, $email, $job) {
    $this->name = $name;
    $this->email = $email;
    $this->job = $job;
  }
}

$names = ['John', 'Mary', 'Darren'];
$emails = ['john@kary.net', 'mary@mks.com', 'darren@woodworking.com'];
$jobs = ['Pilot', 'Astronaut', 'Woodworker'];

var_dump(array_map(function ($name, $email, $job) {
  return new Contact($name, $email, $job);
}, $names, $emails, $jobs));
