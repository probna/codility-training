<?php

namespace HcsOmot\Codility\Lessons\CountingElements;

class PermutationsCheck
{
    public function isArrayAPermutation(array $inputArray)
    {
        $values = [];

        if (empty($inputArray)) {
            return 0;
        }

        $maxValue = max($inputArray);

        if (count($inputArray) != $maxValue) {
            return 0;
        }

        foreach ($inputArray as $value) {
            $values[$value] = $value;
        }

        for ($i = 1; $i <= count($inputArray) - 1; ++$i) {
            if (!array_key_exists($i, $values)) {
                return 0;
            }
//            if ($values[$i]+1 != $values[$i+1]){
//                return 0;
//            }
        }

        return 1;
    }
}
