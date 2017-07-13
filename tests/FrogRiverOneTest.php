<?php

namespace HcsOmot\Codility\Tests;

use HcsOmot\Codility\Lessons\CountingElements\FrogRiverOne;
use PHPUnit\Framework\TestCase;

class FrogRiverOneTest extends TestCase
{
    /**
     * @dataProvider provideTimesWhenLeavesFallOnCertainLocations
     */
    public function testFindEarliestMomentFrogCanCrossTheRiverInXJumps(int $jumpsNeeded, array $timeJumpLocations, int
    $expectedEarliestMoment)
    {
        $riverCrosser = new FrogRiverOne();

        $this->assertEquals($expectedEarliestMoment, $riverCrosser->testFindEarliestMomentFrogCanCrossTheRiverInXJumps($jumpsNeeded, $timeJumpLocations));
    }

    public function provideTimesWhenLeavesFallOnCertainLocations()
    {
        return [
//            [jumps needed to cross river, [timely locations], earliest moment for crossing]
            [1, [1], 0],
            [2, [1, 2], 1],
            [3, [2, 1, 3], 2],
            [4, [4, 1, 3, 2], 3],
            [4, [3, 2, 1, 4, 1, 2, 3, 4], 3],
            [7, [3, 7, 2, 5, 1, 4, 7, 1, 6, 2, 3, 7], 8],
            [3, [2, 2, 2], -1], // edge case: no wind, all leaves falls on the same location
            [5, [5, 5, 5, 5, 5], -1], // edge case: no wind, all leaves falls on the same location
            [3, [2, 2, 1], -1], // edge case: one location isn't covered
            [5, [2, 3, 5, 1], -1], // edge case: one location isn't covered
            [5, [2, 3, 5, 4], -1], // edge case: start location isn't covered
            [5, [2, 3, 1, 4], -1], // edge case: end location isn't covered
        ];
    }
}
