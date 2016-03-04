# Rethinking Loops

Playground for ideas presented in John Kary's talk [Rethinking
Loops](http://johnkary.net/talks/#rethinking-loops).
Can you implement these kata's without using loops? Without control
statements?

## Viewing Slides

```sh
$ git clone https://github.com/johnkary/rethinkingloops.git rethinkingloops
$ cd !$
$ php -S 127.0.0.1:4000 -t slides/
$ open http://127.0.0.1:4000
```

## Install for working on katas

Create a new project based on this project using
[Composer](https://getcomposer.org/).

```sh
$ composer create-project -s dev johnkary/rethinking-loops
$ cd rethinking-loops
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
