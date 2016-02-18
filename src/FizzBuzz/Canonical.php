<?php

namespace RethinkingLoops\FizzBuzz;

use RethinkingLoops\FizzBuzz;

/**
 * Canonical implementation of FizzBuzz kata
 */
class Canonical implements FizzBuzz
{
    /**
     * @return mixed[] Array of numbers, Fizz, Buzz and FizzBuzz
     */
    public function run()
    {
        $answer = [];

        foreach (range(1,100) as $num) {
            $output = '';

            if ($this->isFizz($num)) {
                $output .= 'Fizz';
            }

            if ($this->isBuzz($num)) {
                $output .= 'Buzz';
            }

            if (!$output) {
                $output = $num;
            }

            $answer[] = $output;
        }

        return $answer;
    }

    private function isFizz($num)
    {
        return (0 === $num % 3);
    }

    private function isBuzz($num)
    {
        return (0 === $num % 5);
    }
}
