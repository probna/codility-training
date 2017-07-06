<?php

namespace HcsOmot\Codility\Lessons\TimeComplexity;

class PermmissingElement
{
    public function findMissingElementInArrayUsingArrayDiff(array $arrayWithMissingElement)
    {
        $fullRangeArray = range(1, count($arrayWithMissingElement) + 1);
        $missingElement = array_diff($fullRangeArray, $arrayWithMissingElement);

        return current($missingElement);
    }

    public function findMissingElementInArrayUsingLoops(array $arrayWithMissingElement)
    {
        $fullRange = range(1, count($arrayWithMissingElement) + 1);
        foreach ($fullRange as $index => $element) {
            if (!in_array($element, $arrayWithMissingElement)) {
                return $element;
            }
        }
    }

    public function findMissingElementInArrayUsingArrayFilter(array $arrayWithMissingElement)
    {
        $fullRange = range(1, count($arrayWithMissingElement) + 1);

        return current(array_filter($fullRange, function ($element) use ($arrayWithMissingElement) {
            return !in_array($element, $arrayWithMissingElement);
        }));
    }

    public function findMissingElementInArrayUsingArraySorting(array $arrayWithMissingElement)
    {
        sort($arrayWithMissingElement, SORT_NUMERIC);

        print_r($arrayWithMissingElement);
        foreach ($arrayWithMissingElement as $index => $element) {
            if ($element != $index + 1) {
                return $index + 1;
            }
        }

        return $element + 1;
    }
}
