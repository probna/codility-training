<?php

namespace HcsOmot\Codility\Lessons\CountingElements;

class FrogRiverOne
{
    public function testFindEarliestMomentFrogCanCrossTheRiverInXJumps($jumpsNeeded, $timeJumpLocations)
    {
        $jumpLocations = [];

        foreach ($timeJumpLocations as $time => $jumpLocation) {
            if (!isset($jumpLocations[$jumpLocation])) {
                $jumpLocations[$jumpLocation] = $time;
            } else {
                $jumpLocations[$jumpLocation] = min($jumpLocations[$jumpLocation], $time);
            }
        }

        $result = max($jumpLocations);

        if (count($jumpLocations) != $jumpsNeeded) {
            return -1;
        }

        return $result;
    }
}
