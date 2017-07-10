<?php

namespace HcsOmot\Codility\Lessons\TimeComplexity;

class TapeEquilibrium
{
    public function findMinimalDifference(array $array)
    {
        $arrayLength = count($array);

        $sumHolder = [];

        $rightSum = array_sum($array);

        $sumHolder[1]['leftSum']      = $array[0];
        $minimalDifference            = abs($sumHolder[1]['leftSum'] - $rightSum);
        for ($i = 1; $i < $arrayLength - 1; ++$i) {
            $sumHolder[$i + 1]['leftSum'] = $sumHolder[$i]['leftSum'] + $array[$i];
            $rightSum -= $array[$i - 1];

            $diff = abs($sumHolder[$i]['leftSum'] - $rightSum);

            if ($diff < $minimalDifference) {
                $minimalDifference = $diff;
            }
        }

        return $minimalDifference;
    }
}
