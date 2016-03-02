<?php

/**
 * To run this example you'll need to require the "laravel/laravel" package.
 * Since it imports a ton of code I chose not to require it for default install.
 * If your project already uses Laravel the Collection class ships with the
 * framework.
 *
 * To use this example:
 *
 *  $ composer require laravel/laravel
 *  $ php examples/friends/laravel.php
 */

require __DIR__ . '/../../vendor/autoload.php';

$friends = new \Illuminate\Support\Collection(['John', 'Chris', 'Penelope', 'Megan']);

$greetings = $friends
    ->filter(function ($name) { return strlen($name) < 6; })
    ->map(function ($name) { return 'Hello ' . $name; });

echo implode(", ", $greetings->toArray());
// "Hello John, Hello Chris, Hello Megan"
