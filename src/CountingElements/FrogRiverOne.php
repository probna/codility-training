<?php

namespace HcsOmot\Codility\Lessons\CountingElements;

class FrogRiverOne
{
    public function testFindEarliestMomentFrogCanCrossTheRiverInXJumps($jumpsNeeded, $timeJumpLocations)
    {
        $jumpLocations = [];

        $totalSumOfPositions = $jumpsNeeded * ($jumpsNeeded + 1) / 2;

        $currentlyCoveredPositions = 0;
        foreach ($timeJumpLocations as $time => $jumpLocation) {
            if (!isset($jumpLocations[$jumpLocation])) {
                $jumpLocations[$jumpLocation] = $time;
                $currentlyCoveredPositions += $jumpLocation;
            }
            if ($currentlyCoveredPositions === $totalSumOfPositions) {
                return $time;
            }
        }

        return -1;
    }
}
