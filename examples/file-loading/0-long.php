<?php

/**
 * Directory name within `src` to find and create runnable programs for
 * the given katas.
 *
 * @param string $dir
 * @return string[] FQCN of programs implementing the given kata
 */
function kataProvider($dir)
{
    $src = realpath(__DIR__ . '/../src/' . $dir);

    $classes = [];
    foreach (scandir($src) as $filename) {
        $path = sprintf('%s/%s', $src, $filename);
        if (false === is_dir($path)) {
            $path = str_replace('.php', '', $path);
            $fqcn = str_replace($src . '/', '\\RethinkingLoops\\' . $dir . '\\', $path);

            $r = new \ReflectionClass($fqcn);
            if (false === $r->isAbstract()) {
                $classes[] = $fqcn;
            }
        }
    }

    return $classes;
}

kataProvider("FizzBuzz");

// [
//     "\\RethinkingLoops\\FizzBuzz\\Canonical",
//     "\\RethinkingLoops\\FizzBuzz\\Haystack",
// ]
