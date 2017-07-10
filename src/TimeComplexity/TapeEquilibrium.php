<?php

namespace HcsOmot\Codility\Lessons\TimeComplexity;

class TapeEquilibrium
{
    public function findMinimalDifference(array $array)
    {
        $arrayLength = count($array);

//        $sumHolder = [];

        $rightSum = array_sum($array);

        $leftSum      = $array[0];
        $minimalDifference            = abs($leftSum - $rightSum);
        for ($i = 1; $i < $arrayLength - 1; ++$i) {
            $rightSum -= $array[$i - 1];

            $diff = abs($leftSum - $rightSum);

            if ($diff < $minimalDifference) {
                $minimalDifference = $diff;
            }
            $leftSum = $leftSum + $array[$i];
        }

        return $minimalDifference;
    }
}
