<?php

namespace HcsOmot\Codility\Lessons\PrefixSums;

class PassingCars
{
    public function findNumberOfPairsOfPassingCars(array $arrayOfPassingCars): int
    {
        $eastBound    = 0;
        $passingPairs = 0;

        foreach ($arrayOfPassingCars as $index => $direction) {
            if ($direction === 0) {
                ++$eastBound;
            }
            if ($direction === 1) {
                $passingPairs += $eastBound;
            }
        }

        if ($passingPairs > 1000000000) {
            return -1;
        }

        return $passingPairs;
    }
}
