<?php

declare(strict_types=1);

namespace HcsOmot\Codility\Tests;

use HcsOmot\Codility\Lessons\CountDiv\DivisionsCounter;
use PHPUnit\Framework\TestCase;

class DivisionsCounterTest extends TestCase
{
    /**
     * @dataProvider provideRangeLimitsAndADivisor
     */
    public function testfindNumberOfDividendsInRangeForDivisionWithPredefinedDivisor(int $rangeStart, int $rangeEnd, int $divisor,
        int $expectedNumberOfDividends)
    {
        $resultFinder = new DivisionsCounter();

        $this->assertEquals($expectedNumberOfDividends, $resultFinder->findNumberOfDividendsInRangeForDivisionWithPredefinedDivisor($rangeStart, $rangeEnd, $divisor));
    }

    public function provideRangeLimitsAndADivisor()
    {
        return [
            [1, 2, 2, 1],
            [1, 7, 2, 3],
            [6, 11, 2, 3],
            [1, 15, 3, 5],
            [1, 15, 7, 2],
            [10, 10, 5, 1], // edge case - range endpoint are same
            [10, 10, 7, 0], // edge case - range endpoint are same
            [0, 10, 3, 4],
            [0, 0, 3, 1],
            [0, 1, 1, 2],
            [0, 14, 2, 8],
        ];
    }
}
