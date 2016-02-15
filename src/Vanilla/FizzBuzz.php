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

            $this->answer[] = $output;
        }

        return $this->answer;
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
