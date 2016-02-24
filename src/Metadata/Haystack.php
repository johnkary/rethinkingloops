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
        $keep = (new HArray($metadata))
            ->map(function ($m) {
                return explode(':', $m);
            });
        // Workaround until HArray can be extended via https://github.com/ericpoe/haystack/pull/3
        list ($keep, $parseErrors) = (new HArray($keep))
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
