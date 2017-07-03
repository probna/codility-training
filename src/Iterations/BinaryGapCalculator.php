<?php

namespace HcsOmot\Codility\Lessons\Iterations;

class BinaryGapCalculator
{
    /**
     * @param int $integer
     *
     * @return int
     */
    public function findBinaryGapForInteger(int $integer): int
    {
        $binary = decbin($integer);

        $binlen  = strlen($binary);
        $lastOne = strrpos($binary, '1');

        if ($lastOne != $binlen - 1) {
            $binary = substr($binary, 0, $lastOne + 1);
        }

        $zeroes = explode('1', $binary);

        rsort($zeroes, SORT_STRING);

        return strlen($zeroes[0]);
    }
}
