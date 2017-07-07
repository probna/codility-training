<?php

namespace HcsOmot\Codility\Lessons\TimeComplexity;

class TapeEquilibrium
{
    public function findMinimalDifference(array $array)
    {
        $arrayLength = count($array);

        $sumHolder = [];

        for ($i = 1; $i < $arrayLength; ++$i) {
            $sumHolder[$i]['leftSum'] = array_sum(array_slice($array, 0, $i));

            $sumHolder[$i]['rightSum'] = array_sum(array_slice($array, $i, $arrayLength));

            $diffHolder[$i] = abs($sumHolder[$i]['leftSum'] - $sumHolder[$i]['rightSum']);
        }

        sort($diffHolder);

        return $diffHolder[0];
    }
}
