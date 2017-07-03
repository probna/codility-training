<?php

namespace HcsOmot\Codility\Lessons\Arrays;

class ArrayOddOccurrences
{
    public function findOddElement(array $unpairedArray)
    {
        $elements = [];

        foreach ($unpairedArray as $k => $v) {
            if (isset($elements[$v])) {
                ++$elements[$v];
            } else {
                $elements[$v] = 1;
            }
        }
        foreach ($elements as $value => $count) {
            if ($count % 2 !== 0) {
                return $value;
            }
        }
    }
}
