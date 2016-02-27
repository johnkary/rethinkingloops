<?php

require __DIR__ . '/../../vendor/autoload.php';

$friends = new \Doctrine\Common\Collections\ArrayCollection(['John', 'Chris', 'Penelope', 'Megan']);

$greetings = $friends
    ->filter(function ($name) { return strlen($name) < 6; })
    ->map(function ($name) { return 'Hello ' . $name; });

echo implode(", ", $greetings->toArray());
// "Hello John, Hello Chris, Hello Megan"
