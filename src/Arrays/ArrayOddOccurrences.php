<?php

namespace HcsOmot\Codility\Lessons\Arrays;

class ArrayOddOccurrences
{
    public function findUnpairedElementInArray(array $arrayWithAnUnpairedElement)
    {
        $elements = [];

        foreach ($arrayWithAnUnpairedElement as $key => $element) {
            if (isset($elements[$element])) {
                ++$elements[$element];
            } else {
                $elements[$element] = 1;
            }
        }
        foreach ($elements as $value => $count) {
            if ($count % 2 !== 0) {
                return $value;
            }
        }
    }
}
