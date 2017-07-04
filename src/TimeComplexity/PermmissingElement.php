<?php

namespace HcsOmot\Codility\Lessons\TimeComplexity;

class PermmissingElement
{
    public function findMissingElementInArray(array $arrayWithMissingElement)
    {
        $fullRangeArray = range(1, count($arrayWithMissingElement) + 1);
        $missingElement = array_diff($fullRangeArray, $arrayWithMissingElement);

        return current($missingElement);
    }
}
