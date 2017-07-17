<?php

namespace HcsOmot\Codility\Lessons\CountingElements;

class MaxCounters
{
    public function performAListOfOperationsOnANumberOfCounters(int $numberOfCounters, array $listOfOperations)
    {
        $tmpCounters = [];

        $allCounters = 0;
        $maxCounter  = 0;

        foreach ($listOfOperations as $operation) {
            if ($operation <= $numberOfCounters) {
                if (isset($tmpCounters[$operation - 1])) {
                    ++$tmpCounters[$operation - 1];
                } else {
                    $tmpCounters[$operation - 1] = $allCounters + 1;
                }

                $maxCounter = max($maxCounter, $tmpCounters[$operation - 1]);
            } else {
                $allCounters = $maxCounter;
                $tmpCounters = [];
            }
        }

        $result = array_fill(0, $numberOfCounters, $allCounters);

        foreach ($tmpCounters as $k => $v) {
            $result[$k] = $v;
        }

        return $result;
    }
}
