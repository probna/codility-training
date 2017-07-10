<?php

namespace HcsOmot\Codility\Lessons\TimeComplexity;

class TapeEquilibrium
{
    public function findMinimalDifference(array $array)
    {
        $arrayLength = count($array);

        $leftSum      = 0;
        $rightSum     = array_sum($array);

        $minimalDifference            = abs($leftSum - $rightSum);
        for ($i = 1; $i < $arrayLength; ++$i) {
            $rightSum -= $array[$i - 1];
            $leftSum = $leftSum + $array[$i - 1];

            $diff = abs($leftSum - $rightSum);

            if ($diff < $minimalDifference) {
                $minimalDifference = $diff;
            }
        }

        return $minimalDifference;
    }
}
