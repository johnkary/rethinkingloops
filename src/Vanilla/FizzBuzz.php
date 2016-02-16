<?php

namespace RethinkingLoops\Vanilla;

use RethinkingLoops\FizzBuzzBase;

/**
 * Canonical implementation of FizzBuzz kata
 */
class FizzBuzz extends FizzBuzzBase
{
    /**
     * @return array Array values must be numbers, Fizz, Buzz or FizzBuzz
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
