<?php

namespace HcsOmot\Codility\Lessons\CountingElements;

class MaxCounters
{
    public function performAListOfOperationsOnANumberOfCounters(int $numberOfCounters, array $listOfOperations)
    {
        $currentMaxCounter = 0;

        $counterList = array_fill(0, $numberOfCounters, 0);

        foreach ($listOfOperations as $operation) {
            if ($operation <= $numberOfCounters) {
                ++$counterList[$operation - 1];
                $currentMaxCounter = max($currentMaxCounter, $counterList[$operation - 1]);
            } elseif ($operation === $numberOfCounters + 1) {
                $counterList = array_fill(0, $numberOfCounters, $currentMaxCounter);
            }
        }

        return $counterList;
    }
}
