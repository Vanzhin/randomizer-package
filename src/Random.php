<?php
declare(strict_types=1);


namespace Nvanzhin\Randomizer;

class Random
{
    public function randomize(string $string): string
    {
        $array = explode(' ', $string);
        foreach ($array as &$item) {
            $item = str_shuffle($item);
        }
        shuffle($array);

        return implode(' ', $array);
    }

}