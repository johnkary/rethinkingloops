<?php

namespace RethinkingLoops\Metadata;

use RethinkingLoops\HArray;
use RethinkingLoops\Metadata;

/**
 * Haystack implementation of Metadata kata
 */
class Haystack implements Metadata
{
    /**
     * @param array $metadata
     * @return \stdClass[]
     */
    public function run(array $metadata)
    {
        /** @var HArray $keep */
        /** @var HArray $parseErrors */
        list($keep, $parseErrors) = (new HArray($metadata))
            ->map(function ($m) {
                return explode(':', $m);
            })
            ->splitWith(function ($parts) {
                return count($parts) === 3;
            });

        if (count($parseErrors) > 0) {
            return [];
        }

        return $keep->map(function ($parts) {
            list ($name, $type, $max) = $parts;
            $field = new \stdClass();
            $field->name = urldecode($name);
            $field->type = $type;
            $field->max_length = $max;

            return $field;
        })
        ->toArray();
    }
}
