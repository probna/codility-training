<?php

namespace HcsOmot\Codility\Lessons\Arrays;

class ArrayCyclicRotation
{
    public function rotateArrayInCycles(array $inputArray, int $cycles): array
    {
        $end = array_slice($inputArray, 0 - $cycles, $cycles);

        $front = array_slice($inputArray, 0, count($inputArray) - $cycles);

        return array_merge($end, $front);
    }
}
