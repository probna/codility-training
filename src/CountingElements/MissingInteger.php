<?php

namespace HcsOmot\Codility\Lessons\CountingElements;

class MissingInteger
{
    public function findMissingIntegerInArray(array $inputArray)
    {
        $inputArray = array_filter($inputArray, function ($element) {
            return $element >= 0;
        });

        $values = [];

        foreach ($inputArray as $value) {
            $values[$value] = $value;
        }

        for ($i=1; $i <= count($inputArray) + 1; ++$i) {
            if (!array_key_exists($i, $values)) {
                return $i;
            }
        }
    }
}
