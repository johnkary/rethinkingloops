<?php

namespace RethinkingLoops;

abstract class FizzBuzzBase
{
    /** @var int */
    protected $buzz;

    /** @var int */
    protected $fizz;

    /** @var array */
    protected $source;

    public function __construct()
    {
        $this->fizz = 3;
        $this->buzz = 5;
        $this->source = range(1, 100);
    }

    /**
     * @return array
     */
    abstract public function run();
}
