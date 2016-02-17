<?php

namespace RethinkingLoops;

/**
 * Extend and write a program that prints the numbers from 1 to 100. But for
 * multiples of three print "Fizz" instead of the number and for the multiples
 * of five print "Buzz". For numbers which are multiples of both three and five
 * print "FizzBuzz".
 */
abstract class FizzBuzzBase
{
    /**
     * @return array Array values must be numbers, Fizz, Buzz or FizzBuzz
     */
    abstract public function run();
}
