<?php

namespace HcsOmot\Codility\Lessons\TimeComplexity;

class TapeEquilibrium
{
    public function findMinimalDifference(array $array)
    {
        $arrayLength = count($array);

        $sumHolder = [];

        $rightSum = array_sum($array);

        $minimalDifference = 0;

        for ($i = 0; $i < $arrayLength - 1; ++$i) {
            if ($i === 0) {
                $sumHolder[$i + 1]['leftSum'] = $array[$i];
                $minimalDifference            = abs($sumHolder[$i + 1]['leftSum'] - $rightSum);
            } else {
                $sumHolder[$i + 1]['leftSum'] = $sumHolder[$i]['leftSum'] + $array[$i];
                $rightSum -= $array[$i - 1];

                $diff = abs($sumHolder[$i]['leftSum'] - $rightSum);

                if ($diff < $minimalDifference) {
                    $minimalDifference = $diff;
                }
            }
        }

        return $minimalDifference;
    }
}
