<?php

namespace HcsOmot\Codility\Lessons\CountingElements;

class PermutationsCheck
{
    public function isArrayAPermutation(array $inputArray): int
    {
        if (empty($inputArray)) {
            return 0;
        }

        $maxAllowed = count($inputArray);

        $tempArr = [];
        foreach ($inputArray as $value) {
            if ($value > $maxAllowed) {
                return 0;
            }
            if (array_key_exists($value, $tempArr)) {
                return 0;
            }
            $tempArr[$value]=true;
        }

        return 1;
    }
}
