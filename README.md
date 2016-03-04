# Rethinking Loops

Playground for ideas presented in "Rethinking Loops" by John Kary. Can you
implement these kata's without using loops?

## Install

Create a new project based on this project.

```sh
$ composer create-project -s dev johnkary/rethinking-loops
$ cd rethinking-loops
```

## Viewing Slides

```sh
$ php -S 127.0.0.1:4000 -t slides/
$ open http://127.0.0.1:4000
```

## Writing Katas

Run the unit tests. The failing tests show which katas you have yet to implement:

```sh
$ vendor/bin/phpunit
```

Open your editor and begin hacking on one of the katas.

* Fizz Buzz
    * Haystack\FizzBuzz
* Some other kata?

Re-run the unit tests. If tests pass your implementation works!

## Kata: FizzBuzz

Write a program that prints the numbers from 1 to 100. But for multiples of
three print "Fizz" instead of the number and for the multiples of five print
"Buzz". For numbers which are multiples of both three and five print "FizzBuzz".

Run all tests for Fizz Buzz.

```sh
$ vendor/bin/phpunit tests/FizzBuzzTest.php
```
