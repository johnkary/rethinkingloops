<?php

namespace RethinkingLoops;

/**
 * Customizes Haystack's HArray to add more functionality.
 */
class HArray extends \Haystack\HArray
{
    /**
     * Splits array into two HArray's based on boolean result of predicate
     * function given each array item. Preserves array keys.
     *
     * @param callable $pred
     * @return array(HArray $matches, HArray $noMatches)
     */
    public function splitWith(callable $pred)
    {
        $true = $false = [];

        foreach ($this->arr as $key => $element) {
            if ($pred($element)) {
                $true[$key] = $element;
            } else {
                $false[$key] = $element;
            }
        }

        return array(new static($true), new static($false));
    }
}
