<?php

namespace HcsOmot\Codility\Tests;

use HcsOmot\Codility\Lessons\CountingElements\MaxCounters;
use PHPUnit\Framework\TestCase;

class MaxCountersTest extends TestCase
{
    /**
     * @dataProvider provideAListOfOperationsAndANumberOfCountersToOperateOn
     */
    public function testPerformAListOfOperationsOnANumberOfCounters(
        int $numberOfCounters, array $listOfOperations, array $expectedStateOfCounters
    ) {
        $counterModifier = new MaxCounters();
        $this->assertSame($expectedStateOfCounters,
            $counterModifier->performAListOfOperationsOnANumberOfCounters($numberOfCounters, $listOfOperations));
    }

    public function provideAListOfOperationsAndANumberOfCountersToOperateOn()
    {
        return[
          [1, [1], [1]],
          [1, [1, 1], [2]],
          [2, [1, 1], [2, 0]],
          [2, [1, 2], [1, 1]],
          [2, [1, 3], [1, 1]],
          [2, [1, 3, 1], [2, 1]],
          [2, [1, 3, 1, 1], [3, 1]],
          [2, [1, 3, 1, 2], [2, 2]],
          [2, [1, 3, 1, 2, 2], [2, 3]],
          [2, [1, 3, 1, 2, 2, 3], [3, 3]],
          [5, [3, 4, 4, 6, 1, 4, 4], [3, 2, 2, 4, 2]],
          [3, [1, 1], [2, 0, 0]], // edge case: less operations than there are counters
          [3, [1, 1, 1, 1], [4, 0, 0]], // edge case: more operations than there are counters
        ];
    }
}
