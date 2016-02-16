<?php

namespace RethinkingLoops\Vanilla;

use RethinkingLoops\FizzBuzzBase;

class FizzBuzz extends FizzBuzzBase
{
    /**
     * @return array
     */
    public function run()
    {
        $answer = [];

        foreach ($this->source as $num) {
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
        return (0 === $num % $this->fizz);
    }

    private function isBuzz($num)
    {
        return (0 === $num % $this->buzz);
    }
}
