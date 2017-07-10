<?php

namespace HcsOmot\Codility\Tests;

require_once __DIR__.'/../vendor/autoload.php';

use HcsOmot\Codility\Lessons\TimeComplexity\TapeEquilibrium;
use PHPUnit\Framework\TestCase;

class TapeEquilibriumTest extends TestCase
{
    /**
     * @dataProvider provideArrayAndMinimalDifference
     */
    public function testFindMinimalDifferenceForArray(array $array, int $expectedMinimalDifference)
    {
        $tapeEquilibriumFinder = new TapeEquilibrium();

        $this->assertEquals($expectedMinimalDifference, $tapeEquilibriumFinder->findMinimalDifference($array));
    }

    public function provideArrayAndMinimalDifference()
    {
        return [
            [[1, 2, 3, 4, 5], 3],
            [[3, 1, 2, 4, 3], 1],
            [[1, 3], 2],
            [[2, 2], 0],
        ];
    }
}
